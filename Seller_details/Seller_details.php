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

<div class="outer">
        <div class="header">
            <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/home.php">Home</a></li>
                <li><a href="../User/user.php">My Account</a></li>
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
    
    $join = "SELECT adName,firstname,phonenumber,email,img_dir FROM userdetails INNER JOIN ads ON userdetails.user_id = ads.user_id WHERE ad_id=$ad_id";
    $query_run = mysqli_query($conn, $join);
    $sellerInfo = mysqli_fetch_assoc($query_run);
?>



        </div>
            <div class="Sellerdiv">
            <img src="<?php echo $sellerInfo['img_dir']?>" alt="Ad Image" height=200px width=300px>
                <form action="">
                <table>
                        <tr>
                        </tr>
                        <tr></tr>
                        <tr>    
                                <th>Ad Name </th>
                                <td></td>
                                <td><?php echo $sellerInfo['adName']?></td>
                       </tr>
                        <tr>    
                                <th>Seller Name </th>
                                <td></td>
                                <td><?php echo $sellerInfo['firstname'] ?></td>
                       </tr>
                       <tr></tr>
                       <tr></tr>
                        <tr>
                                <th>Phone Number  </th>
                                <td></td>
                                <td><?php echo $sellerInfo['phonenumber'] ?></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>   
                        <tr>
                                <th>Email   </th>
                                <td></td>
                                <td><?php echo $sellerInfo['email'] ?></td>
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