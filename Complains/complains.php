<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="complain.css">
    <title>complain</title>
</head>

<body>
    <div class="header">
        <h1 class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"
                    width="20px"></a></h1>
        <ul class="main-nav">
            <li><a href="../home/homepage.php">Home</a></li>
            <li><a href="../User/user.php">My Account</a></li>
            <li>
            <div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
                    <div class="dropdown1">
                    <a href="../contact/index.html">Contact Us</a>
                    </div>
            </div>
            </li>
    </ul>
    </div>

<?php
    require "../config.php";

    $select = "SELECT ad_id FROM ads";
    $query = mysqli_query($conn, $select);
    $check_ad = mysqli_num_rows($query) > 0;
    
?>
    
<div class="content1" >
        <form action="comp_function.php" method="POST" style="background-color: #0072BB; display:flex; align-items:center;justify-content:center; flex-direction:column;">
        <table>
        <tr>
        <td>
        <label id="selectid">Select Ad ID: </label>
        <select name="id"  value="<?php echo $adID; ?>" required>
    <option value="">Choose here</option>
<?php 

    if($check_ad){
        while($row = mysqli_fetch_assoc($query)){
            $adID = $row['ad_id']; 
?>
           <option type="text" class="id"><?php echo $adID; ?></option>
<?php
        }}
?>          
            </td></tr>

            <tr></tr>
            <tr>
            <td>
            <textarea name="message" placeholder="Enter your Complain here" rows="15" cols="40" style="max-width:450px"></textarea> <br>
            </td>
            </tr>
            </table>
            <input type="submit" value="Send">
        </form>
</div>


</body>

</html>