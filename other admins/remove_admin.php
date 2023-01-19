<?php

include "../config.php";

if(isset($_POST['user_id'])){

    echo $_POST['user_id'];
    $user = $_POST['user_id'];
    $make = "UPDATE userdetails SET usertype='0' WHERE user_id=$user";
    $query = mysqli_query($conn, $make);

    echo"<script>location.href = '../other admins/otheradmin.php'</script>";
}

echo "<script>location.href = '../other admins/otheradmin.php'</script>";

?>