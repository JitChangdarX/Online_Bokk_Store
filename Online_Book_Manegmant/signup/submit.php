<?php
session_start();
include 'conection.php';

// Retrieve form data
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$gender = htmlspecialchars($_POST['gender']);
// Check if $_SESSION['language'] is an array

// If it's not an array, treat it as a single value (string)
if (is_array($_SESSION['language'])) {
    $language = implode(", ", $_SESSION['language']);
} else {
    // If it's not an array, treat it as a single value (string)
    $language = $_SESSION['language'];
}
// Convert array to a comma-separated string
$email = htmlspecialchars($_POST['email']);
$password = $_POST['password']; // Remove sanitization for password
$confirm_password = htmlspecialchars($_POST['confirm_password']);
$profile_pic = htmlspecialchars($_POST['profile_pic']); // File name from session
if (
    !isset($email, $password, $confirm_password) ||
    empty(trim($email)) ||
    empty(trim($password)) ||
    empty(trim($confirm_password))
) {
    echo "<p style='color:red;'>Please fill in all fields.</p>";
    exit();
}

// Check if email already exists
$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $con->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // Email already exists
    $user = 1;
} else {
    // Check if passwords match
    if ($_POST['password'] === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        // Insert the user into the database
        $sql = "INSERT INTO users (firstname, lastname, gender, language, email, password_hash, profile_pic,confirm) 
                VALUES (:firstname, :lastname, :gender, :language, :email, :password_hash,:profile_pic,:confirm)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $hashed_password);
        $stmt->bindParam(':profile_pic', $profile_pic);
        $stmt->bindParam(':confirm', $confirm_password);
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
            background: #f2f2f2;
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
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .alert-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .alert-container h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .alert-container p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .alert-container.success {
            border-left: 4px solid #28a745;
        }

        .alert-container.error {
            border-left: 4px solid #dc3545;
        }

        .alert-container.warning {
            border-left: 4px solid #ffc107;
        }

        .alert-container button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }

        .alert-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="alert-container 
        <?php
        if ($user == 0) echo 'please wait';
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
                if ($user == 1) echo "The email  already registered please try again.";
                elseif ($user == 2) echo "Registration successful!";
                elseif ($user == 3) echo "Something went wrong. Please try again.";
                elseif ($user == 4) echo "Passwords do not match. Please try again.";
                ?>
            </p>
            <button onclick="window.location.href=''">Close</button>
        </div>
    </div>
</body>

</html>