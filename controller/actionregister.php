<?php
include('../connection/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
    if(isset($_POST)){

	$username = $_POST["username"];
	$password = $_POST["password"];
	$level = $_POST["level"];

	
    $sql_u = "SELECT * FROM login WHERE username='$username'";
    $res_u = mysqli_query($con, $sql_u);

    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken"; 	
    }
	else{
	$sql = "INSERT INTO login(username, password, level)
			 VALUES('$username', '$password', '$level')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);
}

	if($result){
        echo 'SuccessFully Saved';
        Header("Location: ../layouts/signin.php");
    }
    
	else{
        echo 'Sorry... Username Already';
    }

    }else{
        echo 'No Data';
    }
?>
