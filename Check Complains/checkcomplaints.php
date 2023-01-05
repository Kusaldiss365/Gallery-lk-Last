<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="check Complaints.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>check Complaints</title>
</head>
<body>
    <div class="outer">
        <div class="header">
                <h1 class="logo"><a href="../home/home.php"><img src="../Src/Logo.png" width="50px" height="50px" width="20px"></a></h1>
            <ul class="main-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Customer Care</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
                    <div class="dropdown1">
                      <a href="#">Polices</a>
                      <a href="#">Account Details</a>
                      <a href="#">Help</a>
                      <a href="#">Logout</a>
                      <a href="#">2</a>
                      <a href="#">3</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div> 
        <div class="profile">
            <img class="pic" src="../Src/user2.png">
            <p class="username">Admin</p>
        </div>
    </div>
    <div class="body">
        <div class="inner">
                <div>
                    <div class="icon"><img src="../Src/Complaints.png" alt="" class="tip">check Complains</div>
                </div>
                <div class="form">
                <form action="" method="get" class="search">
                    <input type="text " placeholder="search username" name="search" size="50">
                    <button type="submit" class="sbtn" value="Search">Search</button>
                </form>
                </div>
                <div class="table" id="tableid">
                    <table>
                        <tr> 
                            <th colspan="3">Username</th>
                            <th > Pending Complains</th>
                        </tr>
                        <tr>
                            <td >Kussaldiss</td>
                            <td >
                                <div> 
                                   <button type="submit"  class ="button button1">Contact User</button>
                                </div>   
                            </td> 
                            <td >
                                <div > 
                                    <button type="submit" class ="button button2">Check Complains</button>
                                </div> 

                            </td>
                            <td > 02</td>         

                        </tr>
                        <tr>
                            <td >Kaveesha</td>
                            <td >
                                <div> 
                                   <button type="submit" class ="button button1">Contact User</button>
                                </div>   
                            </td> 
                            <td >
                                <div> 
                                    <button type="submit" class ="button button3">Check Complains</button>
                                </div> 

                            </td>
                            <td > 01</td>         

                        </tr>
                        <tr>
                            <td >udeesha</td>
                            <td >
                                <div> 
                                   <button type="submit" class ="button button1">Contact User</button>
                                </div>   
                            </td> 
                            <td >
                                <div> 
                                    <button type="submit" class ="button button4">Check Complains</button>
                                </div> 
                            </td>
                            <td > 00</td> 
                        </tr>
                    </table>
                </div>
            </div>
        </div>   
        </div>
    </div>        
</body>
</html>       