<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- naviagtion bar -->
    <div id="header">
        <ul>
            <li><a href="/home/index.php">Home</a></li>
            <li>about</li>
            <select name="" id="mydropdown">
                <option value="services">services</option>
                <option value="">services1</option>
                <option value="">services2</option>
                <option value="">services3</option>
            </select>
            <li><a href="/contact/contactus.php">Contact</a></li>
            <li><a href="/Login/login_page1.php">login</a></li>
            <li><a href="/signup/page1.php">signup</a></li>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        </ul>
    </div>


    <div class="w3-content w3-display-container">
        <img class="mySlides" src="/home/images/81_inr.jpg" style="width:100%">
        <img class="mySlides" src="img_lights.jpg" style="width:100%">
        <img class="mySlides" src="img_mountains.jpg" style="width:100%">
        <img class="mySlides" src="img_forest.jpg" style="width:100%">

        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>