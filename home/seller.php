<?php


$conn = mysqli_connect('localhost','root','','gallerylk');

    $ad_id = $_POST['ad_id'];
    $user_id = $_POST['user_id'];


    $find = "Select user_id From ads where $ad_id=ad_id";
    mysqli_query($conn, $find);
    $insert = "INSERT INTO fav(user_id,ad_id) VALUES('$user_id','$ad_id')";
    header('Location:../Seller_details/Seller_details.php');

?>


