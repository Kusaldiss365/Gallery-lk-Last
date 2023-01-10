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
    <div class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="60px" height="60px"></a></div>
        <ul class="main-nav">
            <li><a href="../home/homepage.php">Home</a></li>
            <li><a href="../User/user.php">My Account</a></li>
            <li><a href="../contact/mail.php">Customer Care</a></li>
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
    <div class="content">
        <form action="comp_function.php" method="POST">
            Ad id :
            <input type="text" name="id" class="id"><br><br>
            Describe your issue :
            <textarea name="message" rows="15" cols="40"> </textarea> <br>
            <input type="submit" value="send">

        </form>
    </div>
    </div>

</body>

</html>