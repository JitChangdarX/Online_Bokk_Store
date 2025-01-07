<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body</title>
    <link rel="stylesheet" href=" page1_body.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="date.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#accordion")
                .accordion({
                    header: "> div > h3"
                })
                .sortable({
                    axis: "y",
                    handle: "h3",
                    stop: function(event, ui) {
                        // IE doesn't register the blur when sorting
                        // so trigger focusout handlers to remove .ui-state-focus
                        ui.item.children("h3").triggerHandler("focusout");

                        // Refresh accordion to handle new order
                        $(this).accordion("refresh");
                    }
                });
        });
    </script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/home/index.php">Home</a></li>
                <li><a href="/Category/page1.php">Category</a></li>
                <li><a href="/About/page1.php">About</a></li>
                <li><a href="/contact/contactus.php">Contact Us</a></li>
                <li><a href="/Logout/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section>

        <!-- handle the accordion using jQuery -->
        <div id="accordion">

            <div class="group">
                <h1>Welcome to Your Ultimate Book Management and Shopping Experience</h1>
                <p class="description">Your one-stop platform to organize, track, and shop for books that you love.</p>
                <h3>Section 1</h3>
                <div>
                    <p>Welcome to our Online Book Management Store, where you can easily manage your growing collection of books. Our platform is designed with simplicity and efficiency in mind, allowing you to organize and track your books effortlessly. From classic novels to contemporary bestsellers, our system helps you keep everything in one place.</p>

                    <ul>
                        <li>Track your collection by title, author, and genre.</li>
                        <li>Search and filter books by publication date, ratings, and popularity.</li>
                        <li>Keep notes on your books, including personal reviews and reading status.</li>
                        <li>Create personalized reading lists and recommendations.</li>
                        <li>Share your favorite books and collections with friends and family.</li>
                        <li>Get updates on new arrivals and exclusive offers.</li>
                        <li>Access your library from any device, anywhere.</li>
                    </ul>
                </div>
            </div>
            <div class="group">
                <h3>Section 2</h3>
                <div>
                    <p>Our online bookstore is a one-stop destination for book lovers. We provide a wide variety of books ranging from bestsellers, new arrivals, and top-rated collections, ensuring that there's something for everyone. Explore our collection and dive into a world of knowledge, adventure, and imagination. Whether you're a fiction enthusiast or looking for educational resources, our platform offers a seamless and user-friendly experience to make your book shopping easy and enjoyable.</p>
                    <ul>
                        <li>Explore our vast selection of genres</li>
                        <li>Get the latest books delivered to your doorstep</li>
                        <li>Easy navigation for an excellent shopping experience</li>
                        <li>Exclusive offers and discounts for members</li>
                        <li>Personalized recommendations based on your preferences</li>
                        <li>Track your orders and manage your account easily</li>
                        <li>Secure payment options and fast shipping</li>
                    </ul>
                </div>
            </div>
            <div class="group">
                <h3>Section 3</h3>
                <div>
                    <p>Reading books provides numerous benefits that help in both personal and professional growth. It enhances cognitive abilities, improves vocabulary, and stimulates creativity. Regular reading improves mental focus and concentration, while also reducing stress and promoting relaxation. Additionally, reading allows individuals to explore new perspectives, gain knowledge, and boost empathy, fostering personal development and understanding of the world. Whether for leisure or education, reading is an invaluable habit that enriches the mind and nurtures lifelong learning.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="loader">
            <div class="image">
                <img src="https://oxfordbookstore.com/public/uploads/home_content_images/1667369734_4.png" alt="">
                <h4>New Arrivals</h4>
            </div>
            <div class="image">
                <img src="https://oxfordbookstore.com/public/uploads/home_content_images/1667372109_2.png" alt="">
                <h4>Best Sellers</h4>
            </div>
            <div class="image">
                <img src="https://oxfordbookstore.com/public/uploads/home_content_images/1667372109_3.png" alt="">
                <h4>Top Rated</h4>
            </div>
            <div class="image">
                <img src="https://oxfordbookstore.com/public/uploads/home_content_images/1685516372_0.png" alt="">
                <h4>Featured</h4>
            </div>
        </div>
    </section>

    <!-- footer part -->
    <footer>

        <div class="footer-container">
            <div class="footer-section">
                <h5>COMPANY</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Editorial</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>

                </ul>

            </div>
            <div class="footer-section">
                <h5>SHOP</h5>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Returns & Refunds</a></li>
                    <li><a href="#">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>CUSTOMER CARE</h5>
                <ul>
                    <li><a href="#">Orders</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Promotions</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="#">Returns and Exchanges</a></li>

                </ul>
            </div>

            <a href="https://www.instagram.com/jitchangdar/" target="_blank">
                <svg class="icon_image" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100090079112288" target="_blank">
                <svg class="icon_image" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
            </a>
            <a href="https://www.youtube.com/@jitchangdar9580" target="_blank">
                <svg class="icon_image" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                </svg>
            </a>
            <a href="https://github.com/JitChangdarX" target="_blank">
                <img src="https://cdns.iconmonstr.com/wp-content/releases/preview/2012/240/iconmonstr-github-1.png" alt="GitHub Logo" width="10rem" height="10">
            </a>

        </div>


        </div>
        <div class="footer-bottom">© 2025 jit | Developed by D2Cbox</p>
        </div>
    </footer>


</body>

</html>