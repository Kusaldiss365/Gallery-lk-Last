<?php

$conn = mysqli_connect('localhost','root','','register');

$id = $_POST['id'];
$text = $_POST['message'];


$sql = "INSERT INTO complaints VALUES(NULL,'$id','$text')";
            if ( ($conn->query($sql) === TRUE)) {
                header("location:../User/user.php");
            } else {
                header("location:complains.php");
            }

?>