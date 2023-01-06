<?php

$conn = mysqli_connect('localhost','root','','complains');

$id = $_POST['id'];
$text = $_POST['message'];


$sql = "INSERT INTO `check complains` (`Complain_ID`, `Content`, `user_Id`) VALUES ('$id', '$text', NULL);";
            if ( ($conn->query($sql) === TRUE)) {
                header("location:../Admin/admin.php");
            } else {
                header("location:complains2.php");
            }

?>