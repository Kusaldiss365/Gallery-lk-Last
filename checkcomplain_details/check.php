<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="check.css">
    <title>complain details</title>
</head>
<body>
    


    <table class="container">
        <tr>
            <th> ComplainID</th>
            <th> AdId</th>
            <th> message</th>
            
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","gallerylk");
        if($conn-> connect_error){
            die("connection failed:".$conn->conncet_error);

        }   
        $sql = "SELECT id, ad_id, message FROM complaints ";
        $result=$conn-> query($sql);
        
        if($result-> num_rows >0){
            while ($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["id"] ."</td><td>".$row["ad_id"]."</td><td>".$row["message"]."</td>";


            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn->close();
        ?>  
    </table>     
</div>
</body>
</html>