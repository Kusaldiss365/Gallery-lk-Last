<?php

@include '../config.php';

   $username = $_POST['username'];
   $password = $_POST['password'];

   $select = " SELECT * FROM userdetails WHERE username = '$username' && password = '$password'";
   $result = mysqli_query($conn, $select);
   $usertype = "SELECT usertype FROM userdetails WHERE username = '$username' && password = '$password'";
   $type = mysqli_query($conn, $usertype);

   if(mysqli_num_rows($result) === 0){

      echo "Icorrect Password";
      
       $error[] = 'user already exist!';

   }else{
      
      if (mysqli_num_rows($type)=="0") {
         header("Location:../User/user.php");
         exit();

      }else if (mysqli_num_rows($type)=="1") {
         header("Location:../Admin/admin.php");
         exit();
      }
   }
?>
