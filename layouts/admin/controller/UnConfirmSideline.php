<?php
include('../connect.php');

if(!empty($_GET['id'])){
$id = $_GET['id'];

$sql = "UPDATE createpost SET confirm='0' WHERE id='$id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($con);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('UnConfirmed Succesfuly');";
	echo "window.location = '../adminpage.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = '../adminpage.php'; ";
	echo "</script>";
}
}else{
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = '../adminpage.php'; "; 
    echo "</script>";
    }

?>