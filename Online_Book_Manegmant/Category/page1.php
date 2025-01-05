<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</head>

<body>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Fiction</a>
        <a href="#" class="w3-bar-item w3-button">Non-Fiction</a>
        <a href="#" class="w3-bar-item w3-button">Children</a>
        <a href="#" class="w3-bar-item w3-button">Romance</a>
        <a href="#" class="w3-bar-item w3-button">Mystery</a>
        <a href="#" class="w3-bar-item w3-button">Horror</a>
        <a href="#" class="w3-bar-item w3-button">Thriller</a>
        <a href="#" class="w3-bar-item w3-button">Action</a>
        <a href="#" class="w3-bar-item w3-button">Adventure</a>
        <a href="#" class="w3-bar-item w3-button">Comedy</a>
        <a href="#" class="w3-bar-item w3-button">Drama</a>
        <a href="#" class="w3-bar-item w3-button">Fantasy</a>
        <a href="#" class="w3-bar-item w3-button">Historical</a>
        <a href="#" class="w3-bar-item w3-button">Magical Realism</a>
        <a href="#" class="w3-bar-item w3-button">Poetry</a>
    </div>

    <!-- Page Content -->
    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="w3-container">
            <h1>My Page</h1>
        </div>
    </div>

    <!-- Navigation -->
    <nav>
        <div class="categories">
            <ul>
                <li><a href="#">Children</a></li>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Mystery</a></li>
                <li><a href="#">Horror</a></li>
                <li><a href="#">Thriller</a></li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Drama</a></li>
                <li><a href="#">Fantasy</a></li>
                <li><a href="#">Historical</a></li>
                <li><a href="#">Magical Realism</a></li>
                <li><a href="#">Poetry</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>