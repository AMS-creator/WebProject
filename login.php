<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <!-- ... (navigation and other content) ... -->

     <header class="header">

    <a href="#" class="logo"><span>WC</span>travel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="service.php">service</a>
        <a href="about.php">about</a>
        <a href="gallery.php">gallery</a>
        <a href="package.php">package</a>
        <a href="review.php">review</a>
        <a href="booking.php">book</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

     <section class="login">
        <h1 class="heading-title">Login</h1>
        <form action="login_process.php" method="POST" class="login-form">
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>Password :</span>
                <input type="password" placeholder="Enter your password" name="password" required>
            </div>
            <input type="submit" value="Login" class="btn" name="login">
        </form>
    </section>
    <!-- ... (footer content) ... -->
<section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>branches</h3>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> bangladesh </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i>canada </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> uk </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> german </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> switzerland </a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="index.php"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="service.php"> <i class="fas fa-arrow-right"></i> service </a>
                    <a href="about.php"> <i class="fas fa-arrow-right"></i> about </a>
                    <a href="gallery.php"> <i class="fas fa-arrow-right"></i> gallery </a>
                    <a href="package.php"> <i class="fas fa-arrow-right"></i> package </a>
                    <a href="review.php"> <i class="fas fa-arrow-right"></i> review </a>
                    <a href="booking.php"> <i class="fas fa-arrow-right"></i> book </a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
                    <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </div>

            </div>

            <div class="credit"> created by <span>win coder</span> | all rights reserved 2023 </div>

</section>

</body>
</html>