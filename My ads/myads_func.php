<?php

$conn = mysqli_connect('localhost','root','','gallerylk');

$id = $_GET['id'];
$action = $_GET['action'];

if($action == 'delete'){
    $sql = "DELETE FROM ads WHERE ad_id=$id ";
    $conn->query($sql);
        header("location:myads.php");
}


?>