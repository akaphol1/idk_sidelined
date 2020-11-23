<?php
include('../connection/connect.php');

if (!empty($_POST["jobname"])) {
    $jobname = $_POST["jobname"];
    $sex = $_POST["sex"];
    $rateprice = $_POST["rateprice"];
    $area = $_POST["area"];
    $zone = $_POST["zone"];
    $textsideline = $_POST["textsideline"];

    $line = $_POST["line"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $dayforprice = $_POST["dayforprice"];
    $howtosendslip = $_POST["howtosendslip"];

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
        $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
        $sql = "INSERT INTO createpost(jobname,sex,rateprice,area,zone,textsideline,line,age,height,weight,dayforprice,howtosendslip)
        VALUES('$jobname','$sex','$rateprice','$area','$zone','$textsideline','$line','$age','$height','$weight','$dayforprice','$howtosendslip')";
        $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $name);
        mysqli_close($con);
    }
} else {
}
if ($result) {
    Header("Location: ../layouts/sideline/sidelinepage.php");
}
