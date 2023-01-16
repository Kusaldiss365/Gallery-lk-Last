<?php
session_start();
@include '../config.php';

   $username = $_POST['username'];
   $password = $_POST['password'];

   $select = " SELECT * FROM userdetails WHERE username = '{$username}' && password = '{$password}'";
   $result = mysqli_query($conn, $select);
   $usertype = "SELECT usertype FROM userdetails WHERE username = '{$username}' && password = '{$password}'";
   $type = mysqli_query($conn, $usertype);

   if(mysqli_num_rows($result) == 0){

      echo "Incorrect Password";
      
       $error[] = 'user already exist!';

   }else{
      
      if (mysqli_num_rows($type)==1) {
         if($result){
            if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['userid'] = $user['user_id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['user_id'] = $user['user_id'];
         //   header('Location:../Admin/admin.php');
           header('Location:../home/homepage.php');
            }
         }
         

      }else if (mysqli_num_rows($type)==0) {
         
         if($result){
            if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            $_SESSION['userid'] = $user['user_id'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['user_id'] = $user['user_id'];
            header('Location:../home/homepage.php');
            // header('Location:../Admin/admin.php');
            }
         }
      }
   }

   

?>
