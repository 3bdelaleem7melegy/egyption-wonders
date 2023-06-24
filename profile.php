
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleREg.css">



   </head>
<body>
<!-- home section starts  -->
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



<h2>Personal Information</h2>
		<form action="update-profile.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="abdalla"><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" value="abdalla@example.com"><br>

			<label for="password">Password:</label>
			<input type="password" id="password" name="password"><br>

			<button type="submit">Save Changes</button>
		</form>


        <?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'book_db');
// $connection = mysqli_connect('localhost', 'root', '', 'book_db');
// Start the session
session_start();







// Get the user ID from the session (assuming you're using sessions)
$user_id = $_SESSION["id"];

// Get the updated profile data from the form submission
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Update the user's profile in the database
$sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$user_id'";
$result = $conn->query($sql);

// Redirect the user back to the profile page
header("Location: profile.php");
exit();
?>

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

