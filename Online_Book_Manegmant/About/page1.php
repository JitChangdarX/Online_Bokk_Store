<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Alternate Field Example</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="about.css">
    <script>
        $(function() {
            $("#datepicker").datepicker({
                altField: "#alternate",
                altFormat: "DD, d MM, yy"
            });
        });
    </script>

</head>

<body>
    <div class="datepickers">
        <div class="childern_datepicker">
            <label for="datepicker">Select a Date:</label>
            <input type="text" id="datepicker">
            <br>
            <label for="alternate">Formatted Date:</label>
            <input type="text" id="alternate" size="30">
        </div>
    </div>
    <div class="about">
        About Us
        <p> Welcome to jit Online Bookstore , your one-stop destination for all your reading needs!

            We are passionate about connecting book lovers with the stories and knowledge they seek. Our carefully curated collection includes a wide range of genres, from fiction and non-fiction to academic texts and self-help guides. Whether you’re a casual reader, a student, or a lifelong learner, we have something for everyone.

            At jit Online Bookstore we strive to make your shopping experience as smooth and enjoyable as possible. With easy navigation, secure payment options, and fast delivery, you can spend less time searching and more time reading.

            Join our community of readers and embark on a journey of discovery through the power of books.

            Happy reading!</p>
    </div>
</body>

</html>