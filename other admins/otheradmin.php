
<?php session_start();

require "../config.php";

if(isset($_POST['user_id'])){

    $user = $_POST['user_id'];
    $update = "UPDATE userdetails SET usertype='1' WHERE user_id=$user";
    $query = mysqli_query($conn, $update);
    // $run = mysqli_fetch_assoc($query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="other_admin.css">
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
                    <button class="dropbtn"><img src="../src/setting.png" width="20px"></button>
                    <div class="dropdown1">
                      <a href="../privacy/privacy.php">Polices</a>
                      <a href="#">Account Details</a>
                      <a href="../help/help.php">Help</a>
                      <a href="#">Logout</a>
                      
                    </div>
                  </div>
                </li>
            </ul>
        </div> 

            <div class="inner">
                    <div>
                        <div class="icon"><img src="../Src/admin.png" alt="" class="tip">Other Admin</div>
                    </div>
                   
                    <button class="allusers_btn"><a class="allusers" href="../other admins/all_users.php">All Users</a></button>
                <?php
                    require "../config.php";
    
                    $select = "SELECT * FROM userdetails WHERE usertype=1";
                    $query2 = mysqli_query($conn, $select);
                    $admins = mysqli_num_rows($query2)>0;
                    
                    if($admins){
                    ?>
                    <div class="table" id="tableid">
                        <table>
                            <tr> 
                                <th>Username</th>
                                <th >Contact</th>
                                <th>Remove</th>
                            </tr>
                            <?php
                            while($rows = mysqli_fetch_array($query2)){
                            ?>  
                            <tr>
                                <td>
                                <?php 
                                echo $rows['firstname'];
                                echo " ";
                                echo $rows['lastname'];
                                ?>
                                </td>
                                <td >
                                <form action="../contact_admins/conadd.php" method="POST">
                                        <input type="hidden" name='user_id' value="<?php echo $rows['user_id']; ?>">
                                        <input type="submit" class="buttons-btn1" value="Details">
                                </form>
                                </td>
                                <td>
                                <form action="../other admins/remove_admin.php" method="POST">
                                        <input type="hidden" name='user_id' value="<?php echo $rows['user_id']; ?>">
                                        <input type="submit" class="buttons-btn2" value="Remove Admin">
                                </form>
                                </td>  
    
                            </tr>
                        <?php }}?>
                        </table>
                    </div>
                   
                </div>
    
            </div>
        </div>        
    </body>
    </html>       