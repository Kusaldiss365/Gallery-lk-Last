<?php
session_start();

// include_once 'db.php';
$conn = mysqli_connect('localhost','root','','gallerylk');
$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','png');

if(in_array($fileActualExt, $allowed)){
    if($fileError === 0){
        if($fileSize<500000){
            $fileNameNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = '../uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);
        }else{
            echo "<script>alert('Your File is too big')</script>";
        }
    } else{
        echo "<script>alert(There was an error when uploading the file)</script>";
    }
}else{
    echo "<script>alert(You cannot upload files of this type!)</script>";
};

if (isset($_SESSION['firstname'])) {

$userId = $_SESSION['user_id'];

$select = " SELECT * FROM userdetails WHERE user_id = '{$userId}'";
$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) == 1){
    $user = mysqli_fetch_assoc($result);
    $_SESSION['userid'] = $user['user_id'];
}
}

        $adName = $_POST['adName'];
        $ad_desc = $_POST['description'];
        $category = $_POST['catg'];
        $price = $_POST['price'];
        $userid = $_SESSION['userid'];

        $sql = "INSERT INTO ads(adName,category,ad_desc,img_dir,price,user_id)
                VALUES('$adName','$category','$ad_desc','$fileDestination','$price','$userid')";
        
        mysqli_query($conn, $sql);
        
        // header("Location: ../post.php>ad=success");
        
echo"<script>location.href = '../User/user.php'</script>";