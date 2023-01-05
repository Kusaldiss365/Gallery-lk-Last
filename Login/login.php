<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginpage">
    <div class="backbtn"><a href="../home/homepage.php" ><img src="../Src/back.png" width="25px"></a></div>
    <h1>Login</h1>
    <div class="content">
        <form action="Reglog.php" method="post">
            <p>Username : <input type="text" name="username" placeholder="Type here" class="username" require></p>
            <p>Password : <input type="password" name="password" placeholder="Type here" class="password" require></p>
            <input type="submit" value="Login">
            <a href="#" class="forgotpassword">Forgot Password?</a>
        </form> 
    </div>
    </div>
</body>
</html>