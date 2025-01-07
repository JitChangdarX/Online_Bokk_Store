<?php
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(0); // Errors will not show
// ini_set('log_errors', 1);
// ini_set('error_log', '/path/to/error.log');

$user = 0;
$success = 0;
session_start();
include 'conection.php';

$email = htmlspecialchars($_POST['email']);
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

        if (password_verify($password, $stored_hash)) {
            $success = 1;

            $_SESSION['user_id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['firstname'] = $data['firstname'];
        } else {
            $user = 1;
        }
    } else {
        echo "No user found with that email.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .alert-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1050;

        }
    </style>
</head>

<body>

    <div class="alert-container">
        <?php
        if ($user == 1):
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Oh no!</strong> Password does not match the stored hash.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        endif;

        ?>

        <?php if ($success == 1):
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> Login successful!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                // Redirect after 2 seconds
                setTimeout(function() {
                    window.location.href = '/body/page1_body.php';
                }, 2000);
            </script>
        <?php
        endif;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>