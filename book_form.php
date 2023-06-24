<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $emailb = $_POST['mailb'];
      $phoneb = $_POST['phoneb'];
      $packageb = $_POST["product-dropdown"];
      
      $costb = $_POST['packageb'];

      $guests = $_POST['quantityy'];

      $arrivals = $_POST['arrivalsb'];
      $leaving = $_POST['leavingb'];

      $request = " insert INTO `books` (`id`, `email`, `phone`, `package`, `price`, `guests`, `arrivals`, `leaving`) VALUES (' ', '$emailb', '$phoneb', '$packageb', '$costb', '$guests', '$arrivals', '$leaving');";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      header("location:book.php?error=incorrect_password");
   }

?>