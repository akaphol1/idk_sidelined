<?php
include('../connection/connect.php');

if (!empty($_POST["jobname"])) {
    $jobname = $_POST["jobname"];
    $sex = $_POST["sex"];
    $rateprice = $_POST["rateprice"];
    $area = $_POST["area"];
    $zone = $_POST["zone"];
    $textsideline = $_POST["textsideline"];
    $image = $_POST["image"];
    $line = $_POST["line"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $dayforprice = $_POST["dayforprice"];
    $howtosendslip = $_POST["howtosendslip"];

    $sql = "INSERT INTO login(jobname, sex, rateprice,area,zone,textsideline,image,line,age,height,weight,dayforprice,howtosendslip)
			 VALUES('$jobname, $sex, $rateprice,$area,$zone,$textsideline,$image,$line,$age,$height,$weight,$dayforprice,$howtosendslip')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);

} else {  
    
}

?>