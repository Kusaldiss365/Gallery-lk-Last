<?php session_start();
include 'config.php';
$searchErr = '';
$employee_details = '';
if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * FROM ads WHERE (`category` LIKE '%" . $search . "%') ");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);

    } else {
        $searchErr = "Please enter the information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage.css">
    <title>Home</title>
</head>

<body>
    <div class="nav-bar">
        <div class="logo"><a href="../home/homepage.php"><img src="../Src/Logo.png" width="50px" height="50px"></a></div>
        <form class="form-horizontal" action="../home/homepage_copy.php" method="post">
            <div class="row search-bar">
                <div class="form-group">
                    <input type="text" class="search-box" name="search" placeholder="search here">
                    <button type="submit" name="save" class="search-btn"> Search</button>
                </div>
            </div>
        </form>

        <div class="buttons">
                <?php
                if (isset($_SESSION['firstname'])) {
                    echo '<button class="useracc" style="color:blue; text-decoration:none;"><a href="../User/user.php">My Account</a></button>';
                }
                else {
                    echo '<button class="login"><a href = "../Login/login.php" >Login</a></button>';
                    echo '<button class="register"><a href = "../signup/signup.php">Register</a></button>}';
                }
                   
                ?>
                <div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="25px"></button>
                    <div class="dropdown1">
                        <a href="../contact/index.html">Contact Us</a>
                        <button class="logoutbtn"onclick="logout()"><a href="#">Logout</a></button>
                    </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            </button>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <li><a class="nav-item" href="../home/homepage.php">All</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Paintings.php">Paintings</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Drawings.php">Drawings</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Handcrafts.php">Handcrafts</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Sculptures.php">Sculptures</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Photographs.php">Photographs</a></li><label for="">|</label>
                <li><a class="nav-item" href="../home/Papercuts.php">Papercuts</a></li>
            </ul>
        </div>
    </nav>

    <div class="test">
        <?php
        if (isset($_SESSION['firstname'])) {
            echo "Logged in as ";
            echo $_SESSION['firstname'];
        }

        ?>
    </div>

    <div class="container ">
    <aside style="width:50%;">
        <div class="grid-container">
            <?php
            if (!$employee_details) {
            } else {
                foreach ($employee_details as $key => $value) {
            ?>
                    <div class="grid-item">
                        
                            <div class="cards-img" style="width:250px;"><img src="<?php echo $value['img_dir']; ?>" width="100px" height="250px" class="card-img-top" alt="Product Image"></div>
                            <div class="ad-area">
                                <div class="ad-name"><?php echo $value['adName']; ?></div>
                                <div class="ad-category"><?php echo $value['category']; ?></div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </aside>
    </div>

    <div class="bottom absolute-bottom">
        |<a href="../about us/about.php">About us</a>|
        <a href="../contact/index.html">Contact us </a>|
        <a href="../privacy/privacy.php">Privacy & Policy</a>|
        <a href="../help/help.php">Help</a>|
    </div>
    </div>
</body>

</html>