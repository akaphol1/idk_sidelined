<?php
require_once('../connection/connect.php');
$area = $_GET['area'];
$sex = $_GET['sex'];
$rateprice = $_GET['rateprice'];
$confirm = $_GET['confirm'];
    $sql = "SELECT * FROM createpost WHERE area LIKE '%".$area."%' AND sex LIKE '".$sex."' AND rateprice LIKE '".$rateprice."' ";
    $query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - bootstrap 4 navbar</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="index.php">Idk<span>sideline</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocontact.php"><i class="fas fa-map-marker-alt"></i>วิธีการนัดน้องๆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocreatepost.php"><i
                            class="fas fa-map-marker-alt"></i>วิธีการลงโพสต์ไซด์ไลน์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <center>
        <h1>รวมน้องไซด์ไลน์ Zone <?php echo $area; ?></h1>
        <?php
        echo $confirm;
        echo $rateprice;
        ?>
    </center>
    <br>
    <div class=" container" style="padding:5px;">

        <div class="row">
            <?php
        while($row = mysqli_fetch_array($query)){
            if($row['sex']==='girl'){
                $sex = "หญิง";
            }
            if($row['sex']==='ladyboy'){
                $sex = "สาวสอง";
            }
            if($row['sex']==='ladygirl'){
                $sex = "สาวสองแปลง.";
            }
            if($row['confirm']==='1'){
                echo "<div class='col-md-4'>";
                echo "<div class='box'>";
                echo "<div class='card card-body'>";
                echo "<a href='viewsideline.php?id=".$row['id']."'><img class='img-fluid img-thumbnail' src='../layouts/controller/upload/".$row['image']."' style='width:100%;height: 300px;'></a>";
                echo "<div class='ribboner ribbon-bottom'><span>".$sex."</span></div>";
                echo "<div class='ribboncon ribbon-bottomtop'><span>ยืนยันรูปภาพจริง</span></div>";
                echo "<div class='ribbonprice ribbon-bottomright'><span>".$row['rateprice']."฿</span></div>";
                echo "<h3 class='card-title'>".$row['area']."</h3>";
                echo "<p class='card-text'>".$row['zone']."</p>";
                echo "<p class='card-text'>น้อง ".$row['jobname']."</p>";
        
                echo "</div>";
                echo "<br>";
                echo "</div>";
                echo "</div>";
            }else{
                echo "<div class='col-md-4'>";
                echo "<div class='box'>";
                echo "<div class='card card-body'>";
                echo "<img class='img-fluid img-thumbnail' src='../layouts/controller/upload/".$row['image']."' style='height: 300px;'>";
                echo "<div class='ribboner ribbon-bottom'><span>".$sex."</span></div>";
                echo "<div class='ribbonprice ribbon-bottomright'><span>".$row['rateprice']."฿</span></div>";
                echo "<h3 class='card-title'>".$row['area']."</h3>";
                echo "<p class='card-text'>".$row['zone']."</p>";
                echo "<p class='card-text'>น้อง ".$row['jobname']."</p>";
                echo "</div>";
                echo "<br>";
                echo "</div>";
                echo "</div>";
            }

    }
    mysqli_close($con);
        ?>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <span>!! กรุณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตน !!</span>
        </div>
    </footer>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="../script.js"></script>
    <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            placeholder: "--เลือกโซน--",
            allowClear: true
        });
    });
    </script>
</body>

</html>