<?php

$conn = mysqli_connect('localhost','root','','gallerylk');

    $fav_id = $_POST['fav_id'];


    $insert = "DELETE FROM  fav where id = $fav_id";
    mysqli_query($conn, $insert);
    header('Location:../Favourites/fav.php');

?>