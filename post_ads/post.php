<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">


    <title>post an Ad</title>
</head>

<body>
    <div class="outer">
        <div class="header">
            <h1 class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/homepage.php">Home</a></li>
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
            <img class="pic" src="../Src/user2.png">
            <p class="uname">Logged in as <?php echo $_SESSION['firstname']; ?></p>
        </div>
        <div class="body">
            <div class="inner">
                <div>
                    <div class="icon"><img src="../Src/add.png" alt="" class="tip" width="60px">
                        <h2>Post Ad</h2>
                    </div>
                </div>
                <div class="box1">

                    <form action="postad.php" method="post" class="form" enctype="multipart/form-data"
                        target="./success.html">
                        <table>
                            <tr>
                                <th>
                                    <div class="name">Product Name: </div>
                                </th>
                                <td><textarea value="discription" name="adName" cols="60" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <th><label for="name">Select Catagories: </label></th>
                                <td>
                                    <div class="catagories">
                                        <input type="radio" id="Painting" name="catg" value="Painting" class="check">
                                        <label for="Painting"> Painting</label><br>
                                        <input type="radio" id="Drawing" name="catg" value="Drawing" class="check">
                                        <label for="Drawing"> Drawing</label><br>
                                        <input type="radio" id="Sculptures" name="catg" value="Sculptures"
                                            class="check">
                                        <label for="Sculptures"> Sculptures</label><br>
                                        <input type="radio" id="Photographs" name="catg" value="Photographs"
                                            class="check">
                                        <label for="Photographs">Photographs</label><br>
                                        <input type="radio" id="Carft" name="catg" value="Carft" class="check">
                                        <label for="Carft">Handcraft</label><br>
                                        <input type="radio" id="Mixed" name="catg" value="Mixed" class="check">
                                        <label for="Mixed">Papercuts</label><br>
                                        <input type="radio" id="Other" name="catg" value="Other" class="check">
                                        <label for="Other">Others</label><br><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <div class="discription">
                                    <th><label for="Other">Description:</label></th>
                                </div>
                                <div class="description">
                                    <td><textarea value="description" name="description" cols="60" rows="10"></textarea>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="upload">
                                    <th><label for="upload">Upload Product Images: </label></th>
                                    <td><input type="file" name="file" required></td>
                                </div>
                            </tr>
                            <tr>
                                <div class="price">
                                    <th><label for="price">Price: Rs.</label></th>
                                    <td><input type="text" name="price" id="price" required></td>
                                </div>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <div class="post">
                                        <input type="submit" name="submit" value="Post Ad" class="postbtn">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>