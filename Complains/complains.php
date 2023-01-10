<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="complain.css">
    <title>complain</title>
</head>

<body style="  background-image: linear-gradient(180deg, red, yellow); background-repeat:no-repeat; height:95vh;">
    <div class="header">
        <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px"
                    width="20px"></a></h1>
        <ul class="main-nav">
            <li><a href="../home/homepage.php">Home</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Customer Care</a></li>
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
    <div class="content" >
        <form action="comp_function.php" method="POST" style="background-color: white; display:flex; align-items:center;justify-content:center; flex-direction:column;">
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