<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
    <link rel="stylesheet" href="user-contacts.css">
    <script
            src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg main-nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../Src/Logo.png" width="50px" height="50px"
                                                          alt=""></a>
                    <form class="d-flex" role="search">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bolder text-dark">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Policies</a></li>
                                    <li><a class="dropdown-item" href="#">Accounts</a></li>
                                    <li><a class="dropdown-item" href="#">Help</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Customer Care</a>
                            </li>

                        </ul>
                    </form>
                </div>
        </div>
        </nav>
    </div>
    <div class="row">
        <div class="col d-flex mt-3 align-items-center">
            
            
        </div>
    </div>
    <div class="row mb-2">
        <div class="col d-flex align-items-center justify-content-center flex-column">
            <div class="mb-3">
                <form method="post" >
                    <input type="text" name="search" class="search-bar" placeholder="Search..." required id="inputid" onkeyup="handleFIlter()">
                    <input type="button" class="custom-btn" value="Search" onclick="handleFIlter()">
                </form>
                <div class="" id="error"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col user-details d-flex justify-content-center align-items-center flex-column mt-0">
                <div class="form-border d-flex justify-content-center align-items-center flex-column shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="user_name" class="form-label fw-bold ">User Name</label>
                                <div class="card py-0 px-2">
                                    <div class="card-body " id="usernameid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="user_name" class="form-label fw-bold ">First Name</label>
                                <div class="card py-0 px-2">
                                    <div class="card-body " id="firstNameID">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="user_name" class="form-label fw-bold ">Last Name</label>
                                <div class="card py-0 px-2">
                                    <div class="card-body " id="lastNameID">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="user_name" class="form-label fw-bold ">Mobile Number</label>
                                <div class="card py-0 px-2">
                                    <div class="card-body " id="mobileNumberID">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gallerylk";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $resarray = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push( $resarray, $row );
        }
    }

    $conn->close();
    ?>

    var tabledata =<?php echo json_encode( $resarray ); ?> ;

    console.log( tabledata )

    function handleFIlter(elem) {
        document.getElementById("error").innerText = "";
        var input, filter, table, tr, td, i, txtValue, IDVal, IDText;
        input = document.getElementById("inputid");
        var isFound = true;
        filter = input.value.toLowerCase();
        for (i = 0; i < tabledata.length; i++) {
            if (  (tabledata[i].userId === filter ) || (tabledata[i].firstName.toLowerCase().includes(filter)) ) {
                isFound = false;
                document.getElementById("usernameid").innerText = tabledata[i].userName
                document.getElementById("firstNameID").innerText = tabledata[i].firstName
                document.getElementById("lastNameID").innerText = tabledata[i].lastName
                document.getElementById("mobileNumberID").innerText = tabledata[i].PhoneNumber
            }
        }
        if (isFound){
            document.getElementById("usernameid").innerText = ""
            document.getElementById("firstNameID").innerText = ""
            document.getElementById("lastNameID").innerText = ""
            document.getElementById("mobileNumberID").innerText = ""
        }
        if (filter.length === 0 ){
            document.getElementById("usernameid").innerText = ""
            document.getElementById("firstNameID").innerText = ""
            document.getElementById("lastNameID").innerText = ""
            document.getElementById("mobileNumberID").innerText = ""
        }
    }
</script>
</body>
</html>
