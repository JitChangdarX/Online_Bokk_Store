
<?php

// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0);   error will be not show;
// ini_set('log_errors', 1);
// ini_set('error_log', '/path/to/error.log');


session_start();
include 'conection.php';

$email = htmlspecialchars($_POST['email']); // Keep email sanitized
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    echo "All fields are required.";
    exit;
}

try {
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        $stored_hash = $data['password_hash'];

        // Debugging outputs
        echo "Entered Password: $password<br>";
        echo "Stored Hash: $stored_hash<br>";

        // Test password verification
        if (password_verify($password, $stored_hash)) {
            echo "Login successful!";
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['firstname'] = $data['firstname'];
        } else {
            echo "Password does not match the stored hash.<br>";
        }
    } else {
        echo "No user found with that email.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    //error_log("Database error: " . $e->getMessage()); // Log error details
    //echo "An error occurred. Please try again later.";
}
?>