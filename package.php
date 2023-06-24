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
   <title>package</title>

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
      <a href="package.php">packages</a>
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
   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/pack.jpg) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pyramids-2159286.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cairo, Giza, Alexandria</h3>
            <p>This package offers a glimpse into Egypt's rich history and bustling modern culture. Explore the ancient pyramids and Sphinx of Giza, tour the Egyptian Museum and Old Cairo, and soak up the energy of the vibrant city of Alexandria.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dahab, Nuweiba, Taba</h3>
            <p>For those seeking sun, sea, and relaxation, this package offers a chance to unwind on Egypt's beautiful Red Sea coast. Snorkel or dive among colorful coral reefs, hike through stunning desert landscapes, and soak up the laid-back atmosphere of the beach towns of Dahab, Nuweiba, and Taba.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Things-to-do-in-Aswan.jpg.optimal.jpg" alt="">
         </div>
         <div class="content">
            <h3>Luxor, Aswan</h3>
            <p>Immerse yourself in the timeless beauty of Upper Egypt on this package, which takes you through the ancient temples and tombs of Luxor and Aswan. Sail down the Nile on a traditional felucca, visit the Valley of the Kings, and marvel at the magnificent temples of Karnak and Abu Simbel.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/37.jpg" alt="">
         </div>
         <div class="content">
            <h3>Alexandria, North Coast</h3>
         <p>Take a journey to the northern coast of Egypt and visit the historical city of Alexandria. Explore the iconic landmarks such as the Bibliotheca Alexandrina, Pompey's Pillar, and the Catacombs of Kom El Shoqafa. Then, unwind in the Mediterranean vibes of the North Coast, known for its stunning beaches and lively nightlife.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sharm El Sheikh, Al Ain Al Sokhna</h3>
            <p>For a luxurious escape, explore our package to Sharm El Sheikh and Al Ain Al Sokhna. Enjoy the warm waters of the Red Sea with a diving excursion, and discover the vibrant marine life of the region. Then, head to the pristine white sand beaches of Al Ain Al Sokhna and indulge in a variety of spa treatments.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/36.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hurghada, Marsa Alam</h3>
            <p> Embark on an adventure to the Red Sea with our Hurghada and Marsa Alam package. Discover the incredible marine life of the region with a snorkeling or diving excursion. Then, explore the vibrant nightlife of Hurghada and relax on the beaches of Marsa Alam.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/35.jpg" alt="">
         </div>
         <div class="content">
            <h3>Siwa, Fayoum</h3>
            <p>For a unique and off-the-beaten-path experience, discover our Siwa and Fayoum package. Explore the breathtaking landscapes of Siwa Oasis and enjoy the hot springs, salt lakes, and palm groves of the region. Then, head to Fayoum and discover the natural beauty of the waterfalls and desert lakes.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/30.jpg" alt="">
         </div>
         <div class="content">
            <h3>Classic Egypt</h3>
            <p>This package is ideal for first-time visitors to Egypt who want to explore the country's most iconic landmarks. It could include tours of the pyramids and Sphinx of Giza, the Egyptian Museum in Cairo, and the ancient temples and tombs of Luxor and Aswan.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/31.jpg" alt="">
         </div>
         <div class="content">
            <h3>Nile River Cruise</h3>
            <p>Explore Egypt's most famous waterway with a Nile River cruise. This package could include stops in Luxor, Aswan, and other historic sites along the river, with the option to upgrade to a luxury cruise ship.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/32.jpg" alt="">
         </div>
         <div class="content">
            <h3>Family Fun</h3>
            <p>This package could be tailored to families with children, with activities such as camel rides, visits to animal parks and aquariums, and interactive museum exhibits.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      
   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>

<!-- packages section ends -->
















<!-- footer section starts  -->

<section class="footer"  style="background:url(images/foot.jpg) no-repeat">
 <div class="box-container">
<!-- fas fa is used to add icons with font awsome library 
angle right is ">" instead of using images -->
      <div class="box">
         <h3>pages</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> packages</a>
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