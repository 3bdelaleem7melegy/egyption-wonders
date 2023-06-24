<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
  $email = $_POST['emaill'];
  $password = $_POST['passwordl'];
  $_SESSION['emaill'] = $email;
  $q = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $run_query = mysqli_query($connection, $q);

  if (mysqli_num_rows($run_query) > 0) {
    $row = mysqli_fetch_assoc($run_query);
    $_SESSION['isLogin'] = true;
    
    header("location:home.php");
    exit();
  } else {
     header("location:login.php?error=incorrect_password");
     exit();
    
  }
 
}


?>
