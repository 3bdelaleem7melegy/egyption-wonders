

   <?php
  session_start();
   if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true) {
   header("location:login.php");
  exit(); 
} 

?>

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
   
<script>
		// function updateCost() {
		// 	var select = document.getElementById("product-dropdown");
		// 	var cost = select.options[select.selectedIndex].value;
		// 	document.getElementById("cost-display").innerHTML = "Cost: $" + cost;
		// }
      function updateCost() {
			var select = document.getElementById("product-dropdown");
			var cost = select.options[select.selectedIndex].value;
			var quantity = document.getElementById("quantityy").value;
			var totalCost = cost * quantity;
			document.getElementById("cost-display").innerHTML = "Cost: $" + totalCost.toFixed(2);
		}
	</script>
    <script>
      let urlParams = new URLSearchParams(window.location.search);
      let error = urlParams.get('error');
      if (error === 'incorrect_password') {
        alert('enter a valid email & password. Please try again.');
      }
    </script>
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
   <a href="logout.php" class="" style="font-size: 3 rem;
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

<div class="heading" style="background:url(images/pyr.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">please fill all information</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="mailb" require>
         </div>
        
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phoneb" require>
         </div>
         <div class="inputBox">
            <span>select package :</span>
            
   <select id="product-dropdown"   value="packageeb" name="packageb" onchange="updateCost()"style="
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
   background: var(--black);
   color:var(--white); "
   
   
   
   
   >
			<option>Choose a package</option>
			<?php
			// Connect to the database
			$conn = new mysqli('localhost','root','','book_db');

			// Query the database
         $sql = "SELECT pid,places,price FROM packges";
			
			$result = $conn->query($sql);

			// Fetch the data and populate the dropdown menu
			while ($row = $result->fetch_assoc()) {
				echo "<option value=\"" . $row["price"] . "\">" . $row["places"] . "</option>";
			}
			?>
		</select>
         </div>
         <div class="inputBox" >
            <span>The total price :</span>

            <p  name="costb"  value="costb" id="cost-display"  style="
   width: 100%;
   padding:1.2rem 1.4rem;
   font-size: 1.6rem;
   color:var(--light-black);
   text-transform: none;
   margin-top: 1.5rem;
   border:var(--border);
   background: var(--black);
   color:var(--white); ">Cost: $0</p>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" id="quantityy" name="quantity" value="1" min="1" max="10" onchange="updateCost()" placeholder="number of guests" require>
          
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivalsb"require>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leavingb" require>
         </div>
      </div>
      <!--start code -->

      <br><br>
<div>
    <h1 style="padding: 10px;
text-align: center;
  text-align: center;
  background: #D277E3;
  color: balck;
  font-weight: bold;
  border-radius: 15px 50px;
  line-break: loose;
  font-size: 35px;"> Payment </h1>
</div>
<img src=images/Wallet-broo.png style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;">


<div class="inputBox">
    <span style="font-size: 1.5rem;
    color: var(--light-black);">First Name :</span>
    <br>
    <input type="text" placeholder="enter your first name" name="first_name" style="  width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 0.5rem;
       color:var(--light-black);
    border:var(--border);">
</div>
<br>
<div class="inputBox">
    <span style="font-size: 1.5rem;
    color: var(--light-black);">Last Name :</span>
        <br>
    <input type="text" placeholder="enter your  second name"name="second_name"  style="  width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 0.5rem;
    border:var(--border);">
</div>

<div class="inputBox">
    <span style="font-size: 1.5rem;
    color: var(--light-black);">Credit card Number :</span>
        <br>
    <input type="password" placeholder="enter credit card number" name="credit_number"  style="  width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 0.5rem;
    border:var(--border);">
</div>

<div class="inputBox">
    <span style="font-size: 1.5rem;
    color: var(--light-black);">Security Code :</span>
        <br>
    <input type="text" placeholder="CVC" name="sec_code"  style="  width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 0.5rem;
    border:var(--border);">
</div>
<div class="inputBox">
    <span style="font-size: 1.5rem;
    color: var(--light-black);">Card Expiration :</span>
        <br>
    <input type="date" name="card_expire"  style="  width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 0.5rem;
    border:var(--border);">
</div>
         <!--end code -->
<center>
<input type="submit" value="submit" class="btn" name="send">

</center>
     

   </form>

</section>

<!-- booking section ends -->

















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