<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conadd.css">
    <title>Seller Details</title>
</head>
<body>

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
if(isset($_POST['user_id']))
    require "../post_ads/db.php";

    $userid = $_POST['user_id'];
    
    $join = "SELECT * FROM userdetails WHERE user_id=$userid";
    $query_run = mysqli_query($conn, $join);
    $adminInfo = mysqli_fetch_assoc($query_run);
?>



        </div>
            <div class="admin">
                <form action="">
                <table>
                        <tr>    
                                <th>User ID: </th>
                                <td></td>
                                <td><?php echo $adminInfo['user_id']?></td>
                       </tr>
                        <tr>    
                                <th>Full Name: </th>
                                <td></td>
                                <td><?php 
                                echo $adminInfo['firstname']; 
                                echo " ";
                                echo $adminInfo['lastname'];
                                ?>
                                </td>
                       </tr>
                       <tr></tr>
                       <tr></tr>
                        <tr>
                                <th>Phone Number: </th>
                                <td></td>
                                <td><?php echo $adminInfo['phonenumber'] ?></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>   
                        <tr>
                                <th>Email:  </th>
                                <td></td>
                                <td><?php echo $adminInfo['email'] ?></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr><td></td><td></td><td></td>
                        <td>
                        <button class="backbtn"><a href="../other admins/otheradmin.php">Back</a></button></td></tr>
                </table>
                </form>
            </div>

</body>
</html>