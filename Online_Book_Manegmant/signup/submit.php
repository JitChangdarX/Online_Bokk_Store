<?php
session_start();
$user = 0;
include 'conection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$language = $_POST['language']; // Comma-separated string
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
$confirm_password = $_POST['confirm_password'];
$profile_pic = $_POST['profile_pic']; // File name from session

$sql = "SELECT * FROM `users` WHERE `email` = :email";
$stmt = $con->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    // Email already exists
    $user = 1;
} else {
    if ($_POST['password'] === $confirm_password) {
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `gender`, `language`, `email`, `password_hash`, `profile_pic`, `confirm`) 
                VALUES (:firstname, :lastname, :gender, :lan, :email, :password_hash, :profile_pic, :confirm)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':lan', $language);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $password);
        $stmt->bindParam(':confirm', $confirm_password);
        $stmt->bindParam(':profile_pic', $profile_pic);

        if ($stmt->execute()) {
            // Registration successful
            echo "Registration successful!";
            exit;
        } else {
            echo "Error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            color: #fff;
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
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .overlay.show {
            visibility: visible;
            opacity: 1;
        }

        .alert-container {
            background-color: #ff4757;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            animation: slideIn 0.5s ease-out;
        }

        .alert-container h1 {
            font-size: 24px;
            margin: 0 0 10px;
        }

        .alert-container p {
            font-size: 16px;
            margin: 0 0 20px;
        }

        .alert-container button {
            background-color: #fff;
            color: #ff4757;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s ease;
        }

        .alert-container button:hover {
            background-color: #f8d7da;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php if ($user == 1) { ?>
        <div class="overlay show">
            <div class="alert-container">
                <h1>Oops!</h1>
                <p>The email address you entered is already registered.</p>
                <button onclick="closeAlert()">Close</button>
            </div>
        </div>
    <?php } ?>

    <script>
        function closeAlert() {
            const overlay = document.querySelector('.overlay');
            overlay.classList.remove('show');
        }
    </script>
</body>

</html>
