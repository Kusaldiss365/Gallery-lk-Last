<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="conadd.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
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
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
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

    <!-- Sidenav -->
    <div class="sidenav">
        <div class="profile">
          
            <img src="../Src/user1.png" alt="" width="100" height="100">

            <div class="name">
               udeesha
            </div>
            <div class="state">
                Active
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">INFO</a>
                <hr align="center">
            </div>
            
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>ABOUT ME</h2>
        <div class="card">
            <div class="card-body">
                
                <table>
                    <tbody>
                        <tr>
                            <td>Admin Id</td>
                            <td>:</td>
                            <td>04</td>
                        </tr>
                        <tr>
                            <td>Full Name</td>
                            <td>:</td>
                            <td>S.D.U.DILSHANI</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><a href="mailto:2020t00862@stu.cmb.ac.lk">2020t00862@stu.cmb.ac.lk</a>.</td>
                        </tr>
                        
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>076-4242461</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
    <!-- End -->
</body>
</html>