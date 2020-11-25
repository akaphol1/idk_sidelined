<?php session_start(); 
include('connect.php');
$query = "SELECT * FROM login";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
  $ID = $_SESSION['ID'];
  $username = $_SESSIOON['username'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - bootstrap 4 navbar</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="../index.php">Idk<span>sideline</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
        echo "<div class='container'>";
        echo "<center>"."<h3>"."สวัสดีคุณ ".$_SESSION['username']."</h3>";
        echo "<br>"."<h4>"."สถานะ ".$_SESSION['level']."</h4>"."</center>";
        echo "</div>";
    ?>
    <hr>
  
<div class="container">
<table class="table" id="tdsideline" name="tdsideline">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">สถานะ</th>
      <th scope="col">ระยะเวลาโพสต์</th>
      <th scope="col">วันที่โพสต์</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

            include('../connection/connect.php');
            $query = "SELECT * FROM createpost "; 
        
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<th scope='row'>".$row['id']."</th>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['jobname']."</td>";
            if($row['status']==='0'){
                $show = "<td><h3><span class='badge badge-pill badge-primary'>Wait</span></h3></td>";
            }
            else{
                $show = "<td><h3><span class='badge badge-pill badge-success'>Approve</span></h3></td>";
            }
            echo $show;
            if($row['dayforprice']==='1300'){
              $day = "<td>3 เดือน</td>";
            }
            if($row['dayforprice']==='500'){
              $day = "<td>1 เดือน</td>";
            }
            if($row['dayforprice']==='150'){
              $day = "<td>7 วัน</td>";
            }
            echo $day;
            echo "<td>".$row['created_date']."</td>";
            echo "<td><a href='controller/updatesideline.php?id=".$row['id']."' class='btn btn-primary'>Approve</a> <a href='controller/disablesideline.php?id=".$row['id']."' class='btn btn-warning'>Disapproval</a></td>";
            echo "</tr>";
        }
        mysqli_close($con);
            ?>
            
 

  
  </tbody>
</table>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="js/script.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

</body>
</html>
