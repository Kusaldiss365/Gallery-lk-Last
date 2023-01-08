<?php


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
            $fileDestination1 = './uploads/'.$fileNameNew;
            $fileDestination2 = '../post ads/uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination2);
        }else{
            echo "<script>alert('Your File is too big')</script>";
        }
    } else{
        echo "<script>alert(There was an error when uploading the file)</script>";
    }
}else{
    echo "<script>alert(You cannot upload files of this type!)</script>";
};

        $adName = $_POST['adName'];
        $ad_desc = $_POST['description'];
        $category = $_POST['catg'];
        $price = $_POST['price'];
        $id = $_POST['ad_id'];

        $sql = "UPDATE ads SET adName='$adName', category='$category',ad_desc='$ad_desc',img_dir='$fileDestination1',price='$price' WHERE ad_id='$id'";
        $conn = mysqli_connect('localhost','root','','gallerylk');
        mysqli_query($conn, $sql);
        
        header("Location: ./myads.php");
        
// echo"<script>location.href = 'myads.php'</script>";