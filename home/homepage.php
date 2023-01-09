<?php session_start(); ?>
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
            <div class="search-bar">
                <input type="text" placeholder="Search Here" class="search-box">
                <button type="submit" class="search-btn">search</button>
            </div>
            <div class="buttons">
                <button class="login"><a href = "../Login/login.php" >Login</a></button>
                <button class="register"><a href = "../signup/signup.php">Register</a></button>
                <button class="useracc" target=""><a href="../User/user.php">My Account</a></button>
            </div>
            </div>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                </button>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <li><a class="nav-item" href="#artist">All</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#home">Paintings</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#artist">Drawings</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#sellers">Handcrafts</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#contactus">Sculptures</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#about">Photographs</a></li><label for="">|</label>
                    <li><a class="nav-item" href="#about">Papercuts</a></li>
                </ul> 
                </div>
            </nav>

            <div class="test">
                Logged in as <?php echo $_SESSION['firstname']; ?>
            </div>

    <div class="container fluid">
    <div class="row">
                <?php
                        require "../post_ads/db.php";

                        $query = "SELECT * FROM ads";
                        $query_run = mysqli_query($conn , $query);
                        $check_ad = mysqli_num_rows($query_run) > 0;

                        if($check_ad){
                            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                
                <div class="col-md-4 py-5">
                            <div class="card" style="width:350px">
                                <img src="<?php echo $row['img_dir'];?>" width="300px" height="200px" class="card-img-top" alt="Product Image">
                                    <div class="card-body py-4">
                                        <h2 class="ad_title"><?php  echo $row['adName'];  ?></h2>
                                        <h5 class="ad_title"><?php  echo $row['category'];  ?></h5>
                                        <p class="content">
                                        <?php  echo $row['ad_desc'];  ?>
                                        <div class="card-footer bg-transparent border-black">
                                        <a href="../Favourites/fav.php" class="btn btn-warning w-15 p-1">Add to Favoriutes</a>
                                        <a href="#" class="btn btn-primary w-20 p-1">Contact Seller</a>
                                        </div>
                                        </p>
                                    </div>
                            </div>
                </div>
                <?php
                            
                            }
                        }
                        else{
                            echo "No Ads Found";
                        }
                        ?>
    </div>
    </div>
    </div>

        <div class="bottom absolute-bottom">
                    |<a href="../about us/about.php">About us</a>|
                    <a href="../contact/index.html">Contact us </a>|
                    <a href="../privacy/privacy.php">Privacy & Policy</a>|
                    <a href="../help/help.php">Help</a>|
        </div>
    </div>
</body>
</html>