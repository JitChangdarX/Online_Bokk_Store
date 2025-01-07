<?php
session_start();
session_destroy();

// Redirect to login page
header("Location: /Login/login_page1.php");
exit; // Stop further execution
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>highlight_file</h1>
</body>

</html>