<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <title>Favourites</title>
</head>
<body >
    <div class="outer">
        <div class="header">
        <div class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="60px" height="60px"></a></div>
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
        <?php if (isset($_SESSION['firstname'])) {
          echo "Logged in as ";
          echo $_SESSION['firstname'];
        }
        ?>

</div>
            <div class="body">
                <div class="inner">
                        <div>
                            <div class="icon"><img src="../Src/star.png" alt="" class="tip">Favourites</div>
                        </div>

        <?php 
            require "../post_ads/db.php";
            // $user=$_SESSION['user_id'];
            // $query = "SELECT * FROM fav WHERE user_id=$user";
            // $query_run = mysqli_query($conn, $query);
            // $check_ad = mysqli_num_rows($query_run) > 0;

            $join = "SELECT ads.ad_id,adName,category,img_dir,price FROM ads INNER JOIN fav ON ads.ad_id = fav.ad_id";
            $query_run = mysqli_query($conn, $join);
            $check_ad = mysqli_num_rows($query_run) > 0;

            if ($check_ad) {
                while ($row = mysqli_fetch_assoc($query_run)) {
        ?>
      
                              <div class="box1">
                              <img src="<?php echo $row['img_dir']; ?>" width="200px" height="200px" class="card-img-top" alt="Product Image">
                                  <div class="text">
                                      <table>
                                          <tr>
                                              <th>Name </th>
                                              <td><?php echo $row['adName'];  ?></td>
                                          </tr>
                                          <tr>
                                              <th>Category </th>
                                              <td><?php echo $row['category'];  ?></td>
                                          </tr>
                                          <tr>
                                              <th>Price </th>
                                              <td><?php echo $row['price'];  ?></td>
                                          </tr>
                                      </table>
                                  </div>
                                  <div class="btn">
                                      <button  type="button" class="favbutton">Remove</a></button>

                                <form action="../Favourites/Seller_det.php" method="POST">
                                <input type="hidden" name="ad_id" value="<?php echo $row['ad_id'];?>">
                                <input type="submit" class="btn btn-primary btn-sm" style="width:100px" value="Contact Seller">
                                </form>
                                
                                  </div>
                              </div>
                              
    <?php
}

} else {
    echo "No Ads Found";
}
?>

        </body>
        </html>
        
        


