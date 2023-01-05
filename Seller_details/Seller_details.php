<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Seller_details.css">
    <title>Document</title>
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
            </div>
            </div>

            <div class="container">
            <table>
            <div class="description">
                        <tr>    
                                <th>Seller Name: </th>
                                <td><input type="text" name="sellerName"></td>
                            </div>
                       </tr>
                        <tr>
                                <th>Phone Number: </th>
                                <td><input type="text" name="phone"></td>
                        </tr>
                        <tr>
                                <th>Email: </th>
                                <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                            <td>
                            </td>
                            <td>
                            <div class="back">
                            <input type="submit" name="submit" value="Back" class="postbtn">
                            </div>
                            </table>
                </div>
                
</body>
</html>