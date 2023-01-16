<?php

$ad_id = $_POST['ad_id'];
    
    $join = "SELECT adName,firstname,phonenumber,email FROM userdetails INNER JOIN ads ON userdetails.user_id = ads.user_id WHERE ad_id=$ad_id";
    $query_run = mysqli_query($conn, $join);
    $sellerInfo = mysqli_fetch_assoc($query_run);

?>