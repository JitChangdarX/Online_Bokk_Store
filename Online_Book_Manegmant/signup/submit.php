<?php
session_start();
include 'conection.php';

// Retrieve form data
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$gender = htmlspecialchars($_POST['gender']);
$language = htmlspecialchars(implode(", ", $_POST['language'])); // Convert array to a comma-separated string
$email = htmlspecialchars($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
$confirm_password = htmlspecialchars($_POST['confirm_password']);
$profile_pic = htmlspecialchars($_POST['profile_pic']); // File name from session

// Check if email already exists
$sql = "SELECT * FROM `users` WHERE `email` = :email";
$stmt = $con->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // Email already exists
    $user = 1;
} else {
    // Check if passwords match
    if ($_POST['password'] === $confirm_password) {
        // Insert the user into the database
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `gender`, `language`, `email`, `password_hash`, `profile_pic`) 
                VALUES (:firstname, :lastname, :gender, :language, :email, :password_hash, :profile_pic)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $password);
        $stmt->bindParam(':profile_pic', $profile_pic);

        if ($stmt->execute()) {
            // Registration successful
            $user = 2;
        } else {
            // Error inserting data
            $user = 3;
        }
    } else {
        $user = 4; // Passwords do not match
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert-container {
            background-color: #333;
            padding: 20px 30px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .alert-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .alert-container p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .alert-container.success {
            background-color: #28a745;
        }

        .alert-container.error {
            background-color: #dc3545;
        }

        .alert-container.warning {
            background-color: #ffc107;
            color: #000;
        }

        .alert-container button {
            background-color: #fff;
            color: #333;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .alert-container button:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="alert-container 
        <?php
        if ($user == 1) echo 'error';
        elseif ($user == 2) echo 'success';
        elseif ($user == 3) echo 'error';
        elseif ($user == 4) echo 'warning'; ?>">
            <h1>
                <?php
                if ($user == 1) echo "Oops!";
                elseif ($user == 2) echo "Success!";
                elseif ($user == 3) echo "Error!";
                elseif ($user == 4) echo "Warning!";
                ?>
            </h1>
            <p>
                <?php
                if ($user == 1) echo "The email address you entered is already registered.";
                elseif ($user == 2) echo "Registration successful!";
                elseif ($user == 3) echo "Something went wrong. Please try again.";
                elseif ($user == 4) echo "Passwords do not match. Please try again.";
                ?>
            </p>
            <button onclick="window.location.href='page1.php'">Close</button>
        </div>
    </div>
</body>

</html>