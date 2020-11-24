<?php
session_start();
include('../connection/connect.php');
date_default_timezone_set('Asia/Bangkok');
if (!empty($_POST["jobname"])) {
    $jobname = $_POST["jobname"];
    $sex = $_POST["sex"];
    $rateprice = $_POST["rateprice"];
    $area = $_POST["area"];
    $zone = $_POST["zone"];
    $textsideline = $_POST["textsideline"];

    $dir = "upload/";
$nameFile = $_FILES["image"]["name"];
$fileImage = $dir . basename($_FILES["image"]["name"]);
$type = strrchr($_FILES['image']['name'],".");
$DateNow = DATE("d_m_Y_H_i_s");
$numrand = (mt_rand());

$NameFiler = $_FILES["image"]["name"];
$FileName = $NameFiler;

move_uploaded_file($_FILES["image"]["tmp_name"],$fileImage);

    $image = $_POST["image"];
    $line = $_POST["line"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $dayforprice = $_POST["dayforprice"];
    $howtosendslip = $_POST["howtosendslip"];
    $username = $_SESSION['username'];

    $sql = "INSERT INTO createpost(jobname,sex,rateprice,area,zone,textsideline,image,line,age,height,weight,dayforprice,howtosendslip,username)
			 VALUES('$jobname','$sex','$rateprice','$area','$zone','$textsideline','$FileName','$line','$age','$height','$weight','$dayforprice','$howtosendslip','$username')";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    if($result){
        echo "<script type='text/javascript'>";
        echo "window.location('../postsideline.php')";
        echo "</script>";
    }

    mysqli_close($con);

}

?>