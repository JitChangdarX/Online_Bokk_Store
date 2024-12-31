<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!-- Correct version -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            // Initialize the dialog box
            $("#dialog").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 80
                },
                hide: {
                    effect: "explode",
                    duration: 80
                }
            });

            // Open dialog when button is clicked
            $("#opener").on("click", function() {
                $("#dialog").dialog("open");
            });

            // Show or hide the container when checkbox is clicked
            $("#showPasswordCheckbox").click(function() {
                $("#same").toggle(); // Toggle visibility of #same element
            });
        });
    </script>
</head>

<body>
    <div id="same" class="container">
        <p>I really enjoy the way the courses are structured. The learning materials are comprehensive, and the instructors are always available to help.</p>
        <form action="mail.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name" required><br>
            <textarea name="message" placeholder="Please Share Your Experience" required></textarea><br>
            <input type="email" name="mail" placeholder="Enter Your Email Address" required><br>
            <button type="submit">Send Message</button>
        </form>

    </div>

    <div class="cc">
        <div id="dialog" title="Important Information / Terms">
            <p>Please read the following terms before submitting your message:

                - By contacting us, you agree to our Privacy Policy and Terms of Service.
                - We do not share your personal information with third parties without your consent.
                - You may receive an email or a call from our support team to assist you.

                [ ] I have read and agree to the Terms and Conditions.
            </p>
        </div>
        <button id="opener">Open Dialog</button>

        <p>If you have any questions or need further assistance, please don't hesitate to contact us.</p>
        <input type="checkbox" id="showPasswordCheckbox"> Show/Hide More Information
    </div>
</body>

</html>