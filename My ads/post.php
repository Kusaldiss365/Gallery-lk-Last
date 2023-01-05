<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../post ads/post.css">


    <title>post an Ad</title>
</head>

<body>
    <div class="outer">
        <div class="header">
            <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></h1>
            <ul class="main-nav">
                <li><a href="../home/home.php">Home</a></li>
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
            <p class="uname">Sandundiss</p>
        </div>
        <div class="body">
            <div class="inner">
                <div>
                    <div class="icon"><img src="../Src/add.png" alt="" class="tip" width="60px">
                        <h2>Post Ad</h2>
                    </div>
                </div>
                <div class="box1">
                    <?php
                    $conn = mysqli_connect('localhost','root','','register');
                    $sql = "SELECT * FROM ads WHERE ad_id=" . $_GET['id'];
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    ?>

                    <form action="update.php" method="post" class="form" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <th>
                                    <div class="name">Product Name: </div>
                                </th>
                                <td><textarea value="discription" name="adName" cols="60"
                                        rows="3"><?php echo $row['adName'];?></textarea></td>
                            </tr>
                            <tr>
                                <th><label for="name">Select Catagories: </label></th>
                                <td>
                                    <div class="catagories">
                                        <input type="radio" id="Painting" name="catg" value="Painting" class="check"
                                            <?php if($row['category'] == 'Painting'){echo 'checked';}?>>
                                        <label for="Painting"> Painting</label><br>
                                        <input type="radio" id="Drawing" name="catg" value="Drawing" class="check"
                                            <?php if($row['category'] == 'Drawing'){echo 'checked';}?>>
                                        <label for="Drawing"> Drawing</label><br>
                                        <input type="radio" id="Sculptures" name="catg" value="Sculptures" class="check"
                                            <?php if($row['category'] == 'Sculptures'){echo 'checked';}?>>
                                        <label for="Sculptures"> Sculptures</label><br>
                                        <input type="radio" id="Photographs" name="catg" value="Photographs"
                                            class="check"
                                            <?php if($row['category'] == 'Photographs'){echo 'checked';}?>>
                                        <label for="Photographs">Photographs</label><br>
                                        <input type="radio" id="Carft" name="catg" value="Carft" class="check"
                                            <?php if($row['category'] == 'Carft'){echo 'checked';}?>>
                                        <label for="Carft">Handcraft</label><br>
                                        <input type="radio" id="Mixed" name="catg" value="Mixed" class="check"
                                            <?php if($row['category'] == 'Mixed'){echo 'checked';}?>>
                                        <label for="Mixed">Papercuts</label><br>
                                        <input type="radio" id="Other" name="catg" value="Other" class="check"
                                            <?php if($row['category'] == 'Other'){echo 'checked';}?>>
                                        <label for="Other">Others</label><br><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <div class="discription">
                                    <th><label for="Other">Description:</label></th>
                                </div>
                                <div class="description">
                                    <td><textarea value="description" name="description" cols="60"
                                            rows="10"><?php echo $row['ad_desc'];?></textarea>
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
                                    <td><input type="text" name="price" id="price" required
                                            value="<?php echo $row['price'];?>">
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <div class="post">
                                        <input type="hidden" name="ad_id" value=<?php echo $row['ad_id'];?>>
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