<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini_Projet</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><span>WC</span>travel</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="service.php">service</a>
        <a href="about.php">about</a>
        <a href="gallery.php">gallery</a>
        <a href="package.php">package</a>
        <a href="review.php">review</a>
        <a href="#booking">book</a>
    </nav>


    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

  <!-- booking section starts -->

  <section class="book" id="book">
        <div class="heading" style="background: url(images/header-bg-3.png) no-repeat">
            <h1 class="heading"> book<span>now</span> </h1>
            </div>

            <h1 class="heading-title">book your trip!</h1>
            <form action="book_form.php" method="POST" class="book-form">
                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="number" placeholder="enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="number" placeholder="number of guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date"  name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date"  name="leaving">
                    </div>
                </div>

                <input type="submit" value="submit" class="btn" name="send">

            </form>

       </section>

          <!-- booking section ends -->

          <!-- footer section starts -->
   
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
           
          <!-- footer section ends -->

          <!-- theme toggler starts -->

          <div class="theme-toggler">

            <div class="toggle-btn">
                <i class="fas fa-cog"></i>
            </div>
        
            <h3>choose wc color</h3>
        
            <div class="buttons">
                <div class="theme-btn" style="background: #3867d6;"></div>
                <div class="theme-btn" style="background: #f7b731;"></div>
                <div class="theme-btn" style="background: #ff0033;"></div>
                <div class="theme-btn" style="background: #20bf6b;"></div>
                <div class="theme-btn" style="background: #fa8231;"></div>
                <div class="theme-btn" style="background: #FC427B;"></div>
                <div class="theme-btn" style="background: #00a8ff;"></div>
                <div class="theme-btn" style="background: #8e44ad;"></div>
                <div class="theme-btn" style="background: #efd8f9;"></div>
                
            </div>
        
        </div>
        
   
        <!-- theme toggler ends -->
   
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
   <script src="js/script.js"></script>
</body>
</html>



