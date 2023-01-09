<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myads.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>seller</title>
</head>

<body>
    <div class="outer">
        <div class="header">
            <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Customer Care</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                        <div class="dropdown1">
                            <a href="#">ss</a>
                            <a href="#">1</a>
                            <a href="#">3</a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="profile">
        <?php
        if (isset($_SESSION['firstname'])) {
            echo "Logged in as";
             echo $_SESSION['firstname']; 
                                    }
                                    ?>
        
        </div>
        <div class="body">
            <div class="inner">
                <div class="img">
                    <div class="icon"><img src="../Src/book.png" alt="" class="tip">My Ads</div>
                </div>

                <?php 
                $conn = mysqli_connect('localhost','root','','gallerylk');
                $sql = "SELECT * FROM ads";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {?>

                <div class="box1">
                    <div class="image"><img src="../post ads/<?php echo $row['img_dir'];?>" alt="" class="itms"></div>
                    <div class="text">
                        <b><?php 
                        echo "Name : ";
                        echo $row['adName'];
                        echo "<br>";
                        echo "ID : ";
                        echo $row['ad_id'];?>
                        </b><br><b>Category:</b><?php echo $row['category'];?><br><b>Price:</b>Rs.<?php echo $row['price'];?>.00
                    </div>
                    <div class="btn">
                        <div class="btn1"><a href="./post.php?id=<?php echo $row['ad_id'];?>&action=edit"
                                type="button">Edit Ads</a></div>
                        <div class="btn2"><a href="./myads_func.php?id=<?php echo $row['ad_id'];?>&action=delete"
                                type="button">Remove Ads</a></div>
                    </div>
                </div>

                <?php } ?>



            </div>
        </div>
    </div>
</body>

</html>