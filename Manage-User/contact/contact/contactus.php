<?php

@include 'config.php';

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $message= mysqli_real_escape_string($conn, $_POST['message']);
?>