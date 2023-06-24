
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleREg.css">

</head>
<body background="images/125.jpg">
   


<div class="heading" style="background:url(images/125.jpg) no-repeat">
   <h1>Register Now</h1>
</div>

<!-- booking section starts  -->

<section class="register">

   <form action="register_form.php" method="post" class="register-form">

      <div class="flex">
         <div class="inputBoxx">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name1" required>
         </div>
         <div class="inputBoxx">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email1" required>
         </div>

         <div class="inputBoxx">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone1" required>
         </div>
         <div class="inputBoxx">
            <span>birthdate :</span>
            <input type="date" name="birthdate1" required>
         </div>

         <div class="inputBoxx">
         <span>Password :</span>
            <input type="password"id="password" placeholder="enter you password" name="password" required>
        </div>

        <div class="inputBoxx">
         <span>confirm_Password :</span>
            <input type="password" id="confirm_password" placeholder="enter you password again" name="confirm_password" required>
        </div>
<script>
   var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
        
         

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

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
         <a href="#"> <i class="fab fa-tiktok"></i> ticktok </a>
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