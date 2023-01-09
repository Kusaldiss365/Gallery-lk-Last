<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fav.css">
   

    <title>Favourites</title>
</head>
<body >
    <div class="outer">
        <div class="header">
                <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/homepage.php">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Customer Care</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                    <div class="dropdown1">
                    <a href="#">Polices</a>
                      <a href="#">Account Details</a>
                      <a href="#">Help</a>
                      <a href="#">Logout</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div> 
        <div class="profile">
                Logged in as <?php echo $_SESSION['firstname']; ?>
        </div>
            <div class="body">
                <div class="inner">
                        <div>
                            <div class="icon"><img src="../Src/star.png" alt="" class="tip">Favourites</div>
                        </div>
                        <div class="box1">
                            <div class="image"><img src="../Src/1.jpg" alt=""  class="itms1" width="400px"></div>
                            <div class="text">
                                <table>
                                    <tr>
                                        <th>Name </th>
                                        <td>: ABC</td>
                                    </tr>
                                    <tr>
                                        <th>Catagory </th>
                                        <td>: Oil Paint</td>
                                    </tr>
                                    <tr>
                                        <th>Price </th>
                                        <td>: $2000.00</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="btn">
                                <button  type="button" class="favbutton"> <a href="" ><img src="../Src/star.png" class="star"></a></button>
                                <button type="button"  class="btn2"> <a href="" class="btnstyle"> Contact Seller</a></button>
                            </div>
                        </div>
                        <div class="box1">
                        <div class="image"><img src="../Src/2.jpg" alt="" class="itms1" width="400px" ></div>
                            <div class="text">
                                <table>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <td>: ABC</td>
                                    </tr>
                                    <tr>
                                        <th>Catagory :</th>
                                        <td>: Oil Paint</td>
                                    </tr>
                                    <tr>
                                        <th>Price :</th>
                                        <td>: $2000.00</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="btn">
                                <button  type="button" class="favbutton"> <a href="" ><img src="../Src/star.png" class="star"></a></button>
                                <button type="button" class="btn2"> <a href="" class="btnstyle"> Contact Seller</a></button>
                            </div>
                        </div>
                    </div>
            </div>
         </div>
</body>
</html>
