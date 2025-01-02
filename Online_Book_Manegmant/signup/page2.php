<?php
session_start();
include 'conection.php';
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$gender = $_SESSION['gender'];
$language = implode(", ", $_SESSION['language']);
$profile_pic = $_SESSION['profile_pic'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="page2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type == 'password') {
                x.type = 'text';
            } else {
                x.type = 'password';
            }
            var y = document.getElementById("confirm_password");
            if (y.type == 'password') {
                y.type = 'text';
            } else {
                y.type = 'password';
            }
        }
    </script>
</head>

<body>

    <nav>
        <div class="logo">
            <a href="/" style="color: white; font-size: 24px; font-weight: bold; text-decoration: none;">Bookstore</a>
        </div>
        <ul>
            <li><a href="/home/index.php">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/help">Help</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Sign Up</h2>
        <form id="signupForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            <input type="checkbox" id="terms" name="terms" onclick="showPassword()"> I agree to the terms and conditions
            <br>
            <button type="button" id="submit">Submit</button>
        </form>
        <div id="message"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#submit").click(function() {
                // Prepare form data
                const formData = new FormData();
                formData.append("email", $("#email").val());
                formData.append("password", $("#password").val());
                formData.append("confirm_password", $("#confirm_password").val());
                formData.append("firstname", "<?php echo $firstname; ?>");
                formData.append("lastname", "<?php echo $lastname; ?>");
                formData.append("gender", "<?php echo $gender; ?>");
                formData.append("language", "<?php echo $language; ?>");
                formData.append("profile_pic", "<?php echo $profile_pic; ?>"); // Send the file name, not the actual file

                // Debug form data in console
                console.log("Email: " + $("#email").val());
                console.log("Password: " + $("#password").val());
                console.log("Confirm Password: " + $("#confirm_password").val());
                console.log("Firstname: " + "<?php echo $firstname; ?>");
                console.log("Lastname: " + "<?php echo $lastname; ?>");
                console.log("Gender: " + "<?php echo $gender; ?>");
                console.log("Language: " + "<?php echo $language; ?>");
                console.log("Profile Pic: " + "<?php echo $profile_pic; ?>");

                // Send data via AJAX
                $.ajax({
                    url: "submit.php",
                    type: "POST",
                    data: formData,
                    contentType: false, // Prevent default content type
                    processData: false, // Prevent default processing
                    success: function(response) {
                        $("#message").html(response);
                    },
                    error: function(xhr, status, error) {
                        $("#message").html("<p style='color:red;'>An error occurred: " + error + "</p>");
                    }
                });
            });
        });
    </script>

</body>

</html>