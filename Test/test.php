<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

            <!-- <div class="container">
            <div class="row">
                <div class="col">
                Column
                </div>
                <div class="col">
                Column
                </div>
                <div class="col">
                Column
                </div>
            </div>
            </div> -->


    <div class="container">
        <div class="row mt-4">
                 <?php
                        require "../post_ads/db.php";

                        $query = "SELECT * FROM ads";
                        $query_run = mysqli_query($conn , $query);
                        $check_ad = mysqli_num_rows($query_run) > 0;

                        if($check_ad){
                            while($row = mysqli_fetch_array($query_run))
                            { 
                                ?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="" class="card-img-top" alt="Item Image">
                                            <h2 class="card-title"><?php echo $row['adName']; ?></h2>
                                            <p class="card-text"> Dummy text</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo $row['adName'];
                             }
                        }
                        else{
                            echo "No Ads Found";
                        }
                        ?>
           
        </div>
    </div>    


</body>
</html>