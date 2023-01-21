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
                <li><a href="../home/homepage.php">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li><div class="dropdown">
                    <button class="dropbtn"><img src="../Src/setting.png" width="20px"></button>
                    <div class="dropdown1">
                      <a href="../privacy/privacy.php">Polices</a>
                    </div>
                  </div>
                </li>
            </ul>
        </div> 
        <div class="profile">
            <img class="pic" src="../Src/user2.png">
        </div>
    </div>
    <div class="body">
        <div class="inner">
                <div>
                    <div class="icon"><img src="../Src/Complaints.png" alt="" class="tip">check Complains</div>
                </div>
                
                <div class="table" id="tableid">
                    <table>
                        <tr> 
                            <th>Contact User</th>
                            <th>Complains</th>
                            
                        </tr>
                        <tr>
                            
                            <td >
                                <div> 
                                   <button type="submit"  class ="button button1"><a class="link" href ="../contact_user/usercon.php">Contact User</a></button>
                                </div>   
                            </td> 
                            <td >
                                <div > 
                                    <button type="submit" class ="button button2" ><a class="link" href ="../checkcomplain_details/check.php">Check Complains</button>
                                </div> 

                            </td>
                                

                        </tr>
                        
                        
                    </table>
                </div>
            </div>
        </div>   
        </div>
    </div>        
</body>
</html>       