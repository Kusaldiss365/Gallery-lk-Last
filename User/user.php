<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>User</title>
</head>
<body >
    <div class="outer">
        <div class="header">
                <h1 class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/homepage.php">Home</a></li>
                <li><a href="../User/user.php">My Account</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                    <div class="dropdown1">
                    <a href="#">Polices</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div> 
        <div class="profile">            
        <?php
            if (isset($_SESSION['firstname'])) {
            echo "Logged in as ";
            echo $_SESSION['firstname'];
            }
            ?>
        </div>
            <div class="body">
                <div class="inne">
                    <div class="row1">
                        <div class="box">
                            <button type="button">
                            <div class="image"><img src="../Src/book.png" alt="book" class="tip" width="15px"></div>
                            <div class="text"><a href="../My ads/myads.php">My Ads</a></div>
                            </button>
                        </div>
                        <div class="box">
                            <button type="button">
                            <div class="image"><img src="../Src/add.png" alt="add" class="tip"></div>
                            <div class="text"><a href="../post_ads/post.php">Post Ads</a></div>
                            </button>
                        </div>
                        <div class="box">
                            <button type="button">
                            <div class="image"><img src="../Src/star.png" alt="star" class="tip"></div>
                            <div class="text"><a href="../Favourites/fav.php">Favourite</a></div>
                            </button>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="box">
                            <button type="button">
                            <div class="image"><img src="../Src/faq.png" alt="faq" class="tip"></div>
                            <div class="text"><a href="../FAQ/faq.php">FAQ</a></div>
                            </button>
                        </div>
                        <div class="box">
                            <button type="button">
                            <div class="image"><img src="../Src/complains.png" alt="complains" class="tip"></div>
                            <div class="text"><a href="../Complains/complains.php">Complains</a></div>
                            </button>
                        </div>
                    </div>
            </div>
         </div>
</body>
</html>
