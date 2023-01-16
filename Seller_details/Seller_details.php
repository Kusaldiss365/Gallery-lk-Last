<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Seller_details.css">
    <title>Seller Details</title>
</head>
<body>
<?php
include '../config.php';

// $select1 = " SELECT * FROM ads WHERE user_id = '{$userId}'";
// $result = mysqli_query($conn, $select);

// if(mysqli_num_rows($result) == 1){
//     $user = mysqli_fetch_assoc($result);
//     $_SESSION['userid'] = $user['user_id'];}
// ?>
<div class="outer">
        <div class="header">
            <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/home.php">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Customer Care</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                        <div class="dropdown1">
                        <a href="../contact/index.html">Contact Us</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="profile">
           <?php
            if (isset($_SESSION['firstname'])) {
                echo "Logged in as ";
                echo $_SESSION['firstname'];}
            ?>

<?php

    require "../post_ads/db.php";

    $ad_id = $_POST['ad_id'];

    $find = "SELECT user_id From ads WHERE ad_id=$ad_id";
    $query_run1 = mysqli_query($conn, $find);
    $userid = mysqli_fetch_assoc($query_run1);
    // $select1 = mysqli_fetch_assoc($query_run1)
    // $insert = "INSERT INTO fav(user_id,ad_id) VALUES('$user_id','$ad_id')";

?>



        </div>
            <div class="Sellerdiv">
                <form action="">
                <table>
                        <tr>    
                                <th>Ad Name  </th>
                                <td></td>
                                <td><?php echo $ad_id?></td>
                       </tr>
                        <tr>    
                                <th>Seller Name </th>
                                <td></td>
                                <td><?php echo $userid['user_id'] ?></td>
                       </tr>
                       <tr></tr>
                       <tr></tr>
                        <tr>
                                <th>Phone Number  </th>
                                <td></td>
                                <td><input type="text" class="inputs" value="0768871660" name="phone"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>   
                        <tr>
                                <th>Email   </th>
                                <td></td>
                                <td><input type="text" class="inputs" value="kusaldissanayake2@gmail.com" name="email"></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr><td></td><td></td><td></td>
                        <td>
                        <button class="backbtn"><a href="../home/homepage.php">Back</a></button></td></tr>
                </table>
                </form>
            </div>


</body>
</html>