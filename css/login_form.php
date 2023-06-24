<?php
$connection = mysqli_connect('localhost','root','','book_db');

// if(!empty($_SESSION["id"])){
//    header("Location: book.php");
//  }
if(isset($_POST["send"])){
  $emaill = $_POST["emaill"];
  $password = $_POST["passwordl"];
  $result = mysqli_query($conn, "select * FROM user WHERE email = '$emaill'  password = '$password'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }

?>