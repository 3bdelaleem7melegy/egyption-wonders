<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name1'];
      $email = $_POST['email1'];
      $phone = $_POST['phone1'];
      $birthdate = $_POST['birthdate1'];
      $password = $_POST['password'];
      

      $request = "insert into user(id , name , email, phone, birthdate, password) VALUES ('','$name','$email','$phone','$birthdate','$password') ";
      mysqli_query($connection, $request);

      header("location:login.php"); 

   }else{
      echo 'something went wrong please try again!';
   }

?>