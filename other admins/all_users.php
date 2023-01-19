<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all_users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

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
        <?php if (isset($_SESSION['firstname'])) {
          echo "Logged in as ";
          echo $_SESSION['firstname'];
        }
        ?>

</div>
            <div class="body">
                <div class="inner">
                        <div>
                            <div class="icon"><img src="../Src/star.png" alt="" class="tip">All Users</div>
                        </div>

        <?php 
            require "../post_ads/db.php";
            // $user=$_SESSION['user_id'];
            // $query = "SELECT * FROM fav WHERE user_id=$user";
            // $query_run = mysqli_query($conn, $query);
            // $check_ad = mysqli_num_rows($query_run) > 0;

            $select = "SELECT * FROM userdetails";
            $query_run = mysqli_query($conn, $select);
            $all_users = mysqli_num_rows($query_run) > 0;

            if ($all_users) {
                ?>

            <table class = "center" >
                                        <tr>
                                              <th>First Name </th>
                                              <th>Last Name </th>
                                              <th>Phone Number </th>
                                              <th>Email</th>
                                              <th>Action</th>
                                        </tr>
            <?php
                while ($row = mysqli_fetch_assoc($query_run)) {
             ?>
                                        <tr>
                                        <td><?php echo $row['firstname']; ?></td>
                                        <td><?php echo $row['lastname']; ?></td>
                                        <td><?php echo $row['phonenumber']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td>
                                        <form action="../other admins/otheradmin.php" method="POST">
                                        <input type="hidden" name='user_id' value="<?php echo $row['user_id']; ?>">
                                        <input type="submit" class="favbutton" value="Make Admin">
                                        </form>
                                        </td>
                                        <br>
                                        </tr>
                                        
                              
    <?php
}
?>
                </table>
<?php
} else {
    echo "No Data Found";
}
?>

        </body>
        </html>
        