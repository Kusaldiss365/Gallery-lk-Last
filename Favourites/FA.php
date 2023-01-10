<?php

$conn = mysqli_connect('localhost','root','','gallerylk');

    $ad_id = $_POST['ad_id'];
    $user_id = $_POST['user_id'];


    $insert = "INSERT INTO fav(user_id,ad_id) VALUES('$user_id','$ad_id')";
    mysqli_query($conn, $insert);
    header('Location:../Favourites/fav.php');

?>