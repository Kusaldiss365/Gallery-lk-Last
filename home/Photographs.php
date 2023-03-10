<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage.css">
    <title>Home</title>
</head>

<body>
        <div class="nav-bar">
            <div class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></div>
            <form class="form-horizontal" action="../home/homepagecopy.php" method="Post">
            <div class="row search-bar">
                <div class="form-group">
                    <input type="text" class="search-box" name="search" placeholder="search here">
                    <button type="submit" name="save" class="search-btn">Search</button>
                </div>
            </div>
        </form>
            <div class="buttons">
        <?php
        require '../config.php';

        if (isset($_SESSION['firstname'])){
        $userid = $_SESSION['user_id'];
        $query2 = "SELECT usertype FROM userdetails WHERE user_id='$userid'";
        $query2_run = mysqli_query($conn, $query2);
        $usercheck = mysqli_fetch_assoc($query2_run);

            if($usercheck['usertype'] == 1){
                    echo '<button class="useracc" style="color:light-blue; text-decoration:none;"><a href="../Admin/admin.php">Admin Panel</a></button>';
                    echo '<button class="useracc" style="color:blue; text-decoration:none;"><a href="../User/user.php">My Account</a></button>';
                }
                else{
                    echo '<button class="useracc" style="color:blue; text-decoration:none;"><a href="../User/user.php">My Account</a></button>';
                }
            }
        else {
                    echo '<button class="login"><a href = "../Login/login.php" >Login</a></button>';
                    echo '<button class="register"><a href = "../signup/signup.php">Register</a></button>}';
                }
                   
                ?>
                <div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                    <div class="dropdown1">
                        <a href="../contact/index.html">Contact Us</a>
                        <button class="logoutbtn"onclick="logout()">Logout</a></button>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </div>

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <li><a class="nav-item" href="../home/homepage.php">All</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Paintings.php">Paintings</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Drawings.php">Drawings</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Handcrafts.php">Handcrafts</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Sculptures.php">Sculptures</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Photographs.php">Photographs</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Papercuts.php">Papercuts</a></li>
            </ul>
        </div>
    </nav>

    <div class="container fluid">
        <div class="row">
        <?php
            require "../post_ads/db.php";

            $query = "SELECT * FROM ads WHERE category='Photograph'";
            $query_run = mysqli_query($conn, $query);
            $check_ad = mysqli_num_rows($query_run) > 0;

            if ($check_ad) {
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>

                    <div class="col-md-4 py-5">
                        <div class="card" style="width:350px">
                            <img src="<?php echo $row['img_dir']; ?>" width="300px" height="200px" class="card-img-top" alt="Product Image">
                            <div class="card-body py-4">
                                <h2 class="ad_title"><?php echo $row['adName'];  ?></h2>
                                <h5 class="ad_title"><?php echo $row['category'];  ?></h5>
                                <p class="content">
                                    <?php echo "ID: "?>
                                    <?php echo $row['ad_id'];  ?>
                                    <?php echo "<br>"?>
                                    <?php echo "Price (LKR): "?>
                                    <?php echo $row['price'];  ?>
                                    <?php echo "<br>"?>
                                    <?php echo $row['ad_desc'];  ?>
                                <div class="card-footer bg-transparent border-black">
                                    <!-- <a href="../Favourites/fav.php" class="btn btn-warning w-15 p-1">Add to Favoriutes</a> -->
                                    <?php
                                    if (isset($_SESSION['firstname'])) {
                                    echo '<form action="../Favourites/FA.php" method="POST">';
                                    echo  '<input type="hidden" name="user_id" value="';
                                    echo ($_SESSION['user_id']);
                                    echo '">';
                                    echo '<input type="hidden" name="ad_id" value="';
                                    echo $row['ad_id'];
                                    echo '">';
                                    echo '<input type="submit" class="btn btn-warning w-15 mb-1" value="Add to favorites">';
                                    echo '</form>'; }

                                    echo '<form action="../Seller_details/Seller_details.php" method="POST">';
                                    echo '<input type="hidden" name="ad_id" value="';
                                    echo $row['ad_id'];
                                    echo '">';
                                    echo '<input type="submit" class="btn btn-primary w-24 p-1 b-2" value="Contact Seller">';
                                    echo '</form>';
                                    ?>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php

                }
            } else {
                echo "No Ads Found";
            }
            ?>
        </div>
    </div>
    </div>
    
    
    </div>
    <div class="bottom1" >
        |<a href="../about us/about.php">About us</a>|
        <a href="../contact/index.html">Contact us </a>|
        <a href="../privacy/privacy.php">Privacy & Policy</a>|
    </div>
<script>
    function logout(){
        if(confirm("Do you want to logout?")){
            window.location = '../User/userlogout.php';
        }
    }
</script>

</body>

</html>