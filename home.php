<?php
  session_start();
if($_SESSION['isLogin']!=true)
{
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleREg.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Egyptian Wonders</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="profile.php">profile</a>
      

    </nav>
   <table>
      <th>
         <tr>
   <a href="logout.php" class="" style="font-size: 2.5 rem;
   color:var(--black);
   background-color: black;
   border: none;
   border-radius: 12px;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 40rem;
; ">Logout</a>
</tr>
<tr>

</tr>
</th>

   </table>
    <div id="menu-btn" class="fas fa-bars"></div> <!--icon representing a set of bars or a menu icon -->

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/pyramids-2159286.jpg) no-repeat">
            <div class="content">
               <h3>Discover Nile's Treasures</h3>
               <a href="package.php" class="btn">Go Explore</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/tau-hen_header.jpg) no-repeat">
            <div class="content">
               <h3>Dive into Egypt's Coast</h3>
               <a href="package.php" class="btn">Red Sea Voyages</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/egyptheader.jpg) no-repeat">
            <div class="content">
               <h3>Cruise History in Egypt</h3>
               <a href="package.php" class="btn">Travel Smart</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> what to do in Egypt </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>hiking</h3>
      </div>

      <div class="box">
         <img src="images/scuba.png" alt="">
         <h3>diving</h3>
      </div>

      <div class="box">
         <img src="images/pharaoh.png" alt="">
         <h3>exploring</h3>
      </div>

      <div class="box">
         <img src="images/boat.png" alt="">
         <h3>nile cruse</h3>
      </div>

      

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

      <div class="box">
         <img src="images/concert.png" alt="">
         <h3>concerts
         </h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-us.png" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Welcome to Egyptian Wonders, your gateway to the wonders of Egypt. Our mission is to provide you with an unforgettable travel experience that showcases the history, culture, and natural beauty of this incredible country. Whether you're seeking adventure, relaxation, or a bit of both, we offer a variety of tours and activities to suit your interests and budget. Our knowledgeable guides are passionate about sharing their love of Egypt with you, and our carefully curated itineraries ensure that you'll see the most iconic sights as well as some hidden gems. With Egyptian Wonders, you'll discover the pyramids, sail down the Nile, explore ancient temples, and immerse yourself in the vibrant modern culture of Cairo and beyond. Join us on a journey that will leave you with memories to last a lifetime.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/kk.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cairo,Giza,Alex</h3>
            <p>This package offers a glimpse into Egypt's rich history and bustling modern culture. Explore the ancient pyramids and Sphinx of Giza, tour the Egyptian Museum and Old Cairo, and soak up the energy of the vibrant city of Alexandria.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Things-to-do-in-Aswan.jpg.optimal.jpg" alt="">
         </div>
         <div class="content">
            <h3>luxor,Aswan</h3>
            <p>Immerse yourself in the timeless beauty of Upper Egypt on this package, which takes you through the ancient temples and tombs of Luxor and Aswan. Sail down the Nile on a traditional felucca, visit the Valley of the Kings, and marvel at the magnificent temples of Karnak and Abu Simbel.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dahab,Nweibaa,Taba</h3>
            <p>For those seeking sun, sea, and relaxation, this package offers a chance to unwind on Egypt's beautiful Red Sea coast. Snorkel or dive among colorful coral reefs, hike through stunning desert landscapes, and soak up the laid-back atmosphere of the beach towns of Dahab, Nuweiba, and Taba.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>up to 60% off</h3>
      <p>Looking to explore the wonders of Egypt while saving big? Look no further than our travel packages, now with offers up to 60% off! Discover the iconic sights of Cairo, Giza, and Alexandria, or immerse yourself in the beauty of Luxor and Aswan, all while enjoying incredible discounts. For those seeking sun and relaxation, our Red Sea package to Dahab, Nuweiba, and Taba is the perfect choice. With a variety of tours and activities, knowledgeable guides, and unbeatable prices, our travel packages offer the ultimate way to experience Egypt. Don't miss out on this limited-time offer – book your adventure today!
</p>
      <a href="book.php" class="btn">offers</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer"  style="background:url(images/foot.jpg) no-repeat">


   


   <div class="box-container">
<!-- fas fa is used to add icons with font awsome library 
angle right is ">" instead of using images -->
      <div class="box">
         <h3>pages</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fa fa-mobile"></i> 01010210748 </a>
         <a href="#"> <i class="fas fa-phone"></i> 0236798213 </a>
         <a href="#"> <i class="fas fa-at"></i> abdalla.elkhateeb@gmail.com </a>
         <a href="#"> <i class="fas fa-map-marker-alt"></i> cairo, Egypt </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> <span>Egyptian </span> Wonders</div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>