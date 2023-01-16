<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div class="outer">
        <div class="header">
                <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px" width="20px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/homepage.php">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Customer Care</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
                    <div class="dropdown1">
                    <a href="../contact/index.html">Contact Us</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div> 
        <div class="profile">
        <?php if (isset($_SESSION['firstname'])) {
          echo "Logged in as ";
          echo $_SESSION['firstname'];
        }
        ?>
        </div>
        <form action="adminback.php" method="post">
         <div class="body">
                <div class="inner">
                    <div class="row1">
                        
                        <div class="box">
                        <button type="button">
                            <div class="image"><img src= "../src/user1.png" class="tip" ></div>
                            <div class="text"><a href="../contact_user/usercon.php">Contact Users</a></div>
                        </button>
                        </div>
                        <div class="box">
                        <button type="button">
                            <div class="image"><img src= "../src/Complains.png" class="tip" ></div>
                            <div class="text"> <a href="../checkcomplain_details/check.php">Check Complains</a></div>
                        </button>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="box">
                        <button type="button">
                            <div class="image"><img src= "../src/admin.png" class="tip"></div>
                            <div class="text"> <a href="../Other admins/otheradmin.php">Other Admins</a></div>
                        </button>
                        </div>
                   </div>
                </form>
                </div>
        </div>
</body>
</html>