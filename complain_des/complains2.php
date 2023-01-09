
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="complain2.css">
    <title>Complains</title>
</head>

<body>
    <div class="header">
        <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"
                    width="20px"></a></h1>
        <ul class="main-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Customer Care</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
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
        <img class="pic" src="../Src/user1.png">
        <p class="username">Admin</p>
    </div>
    <div class="content">
        <form action="complain_connection.php" method="POST">
            Complain ID <br>
            <input type="text" name="id" class="id"><br><br>
            Complain content
            <textarea name="message" rows="20" cols="50"> </textarea> <br>
            <input type="submit" value="SEND>

        </form>
    </div>
    </div>

</body>

</html>

  