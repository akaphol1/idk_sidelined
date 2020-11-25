<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - bootstrap 4 navbar</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="../style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php">Idk<span>sideline</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocontact.php"><i class="fas fa-map-marker-alt"></i>วิธีการนัดน้องๆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocreatepost.php"><i class="fas fa-map-marker-alt"></i>วิธีการลงโพสต์ไซด์ไลน์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container text-center my-3">
    <!-- <h2 class="font-weight-light">TOP STAR</h2>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

            <?php
        include('../connection/connect.php');
        $query = "SELECT * FROM createpost WHERE status ='1'"; 
        $result = mysqli_query($con,$query);
        if($result){
            $row = mysqli_num_rows($result);
            
                while($row = mysqli_fetch_array($result)){
                                if($row['sex']==='girl'){
                $sex = "หญิง";
            }
            if($row['sex']==='ladyboy'){
                $sex = "สาวสอง";
            }
            if($row['sex']==='ladygirl'){
                $sex = "สาวสองแปลง.";
            }
                    echo "<div class='carousel-item'>";
                    echo "<img class='img-fluid img-thumbnail' src='../layouts/controller/upload/".$row['image']."' style='height: 300px;'>";
                    echo "<div class='col-md-4'>";
                    echo "<div class='box'>";
                    echo "<div class='card card-body'>";
                    echo "<div class='ribbon ribbon-top-right'><span>ยืนยันตัวตนแล้ว</span></div>";
       
                    echo "<div class='ribboner ribbon-bottom'><span>".$sex."</span></div>";
                    echo "<div class='ribbonprice ribbon-bottomright'><span>".$row['rateprice']."฿</span></div>";
                    echo "<h3 class='card-title'>".$row['zone']."</h3>";
                    echo "<p class='card-text'>".$row['area']."</p>";
                    echo "<p class='card-text'>น้อง ".$row['jobname']."</p>";
            
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            
            // else{
            //     while($row = mysqli_fetch_array($result)){
            //         echo "<div class='carousel-item'>";
            //         echo "<div class='col-md-4'>";
            //         echo "<div class='box'>";
            //         echo "<div class='card card-body'>";
            //         echo "<div class='ribbon ribbon-top-right'><span>New</span></div>";
            //         echo "<img class='img-fluid img-thumbnail' src='../layouts/controller/upload/".$row['image']."' style='height: 300px;'>";
            //         echo "<div class='ribboner ribbon-bottom'><span>".$sex."</span></div>";
            //         echo "<div class='ribbonprice ribbon-bottomright'><span>".$row['rateprice']."฿</span></div>";
            //         echo "<h3 class='card-title'>".$row['zone']."</h3>";
            //         echo "<p class='card-text'>".$row['area']."</p>";
            //         echo "<p class='card-text'>น้อง ".$row['jobname']."</p>";
            
            //         echo "</div>";
            //         echo "</div>";
            //         echo "</div>";
            //         echo "</div>";
            //     }
            // }
        }

            mysqli_close($con);
        ?>
            </div>
            <!-- <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div> -->
   
</div>
<hr>
<div class="container">
<h2>น้องๆไซด์ไลน์น่าสนใจ</h2>
<br>
<div class="row">
<?php
        include('../connection/connect.php');
        $query = "SELECT * FROM createpost WHERE status ='1' "; 
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_array($result)){
            if($row['sex']==='girl'){
                $sex = "หญิง";
            }
            if($row['sex']==='ladyboy'){
                $sex = "สาวสอง";
            }
            if($row['sex']==='ladygirl'){
                $sex = "สาวสองแปลง.";
            }
        echo "<div class='col-md-4'>";
        echo "<div class='box'>";
        echo "<div class='card card-body'>";
        echo "<div class='ribbon ribbon-top-right'><span>ยืนยันตัวตนแล้ว</span></div>";
        echo "<a href='viewsideline.php?id=".$row['id']."'><img class='img-fluid img-thumbnail' src='../layouts/controller/upload/".$row['image']."' style='width:100%;height: 300px;'></a>";
        echo "<div class='ribboner ribbon-bottom'><span>".$sex."</span></div>";
        echo "<div class='ribbonprice ribbon-bottomright'><span>".$row['rateprice']."฿</span></div>";
        echo "<h3 class='card-title'>".$row['zone']."</h3>";
        echo "<p class='card-text'>".$row['area']."</p>";
        echo "<p class='card-text'>น้อง ".$row['jobname']."</p>";

        echo "</div>";
        echo "<br>";
        echo "</div>";
        echo "</div>";
    }
    mysqli_close($con);
        ?>
</div>
</div>
<footer class="footer">
      <div class="container">
        <span>!!กรณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตน!!</span>
      </div>
    </footer>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="../script.js"></script>
</body>
</html>
