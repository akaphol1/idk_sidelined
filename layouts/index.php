<?php
require_once('../connection/connect.php');
$sql = "SELECT * FROM provinces";
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
    <div class="container-fluid" style="background-color:#75D7D9;text-align:center;">
        <div class="background-banner">
            <div class="row">

                <div class="col-md-12 col-lg-7">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 style="font-weight: bold;">I D K S I D E L I N E</h2>
                </div>
                <div class=" col-md-9 col-lg-7">

                    <h2 style="font-weight: bold;">เว็บสาวไซด์ไลน์อันดับ 1 ในไทย</h2>
                </div>
                <div class="col-md-9 col-lg-7"">
                    <a href=" howtocreatepost.php" class=" btn"
                    style="background-color:#FB5E35;color:white;font-weight: bold;">ลงโพสต์ไซด์ไลน์</a>
                    <a href="signup.php" class="btn"
                        style="background-color:#39B54A;color:white;font-weight: bold;">สมัครบัญชี</a>
                </div>

            </div>

        </div>
    </div>
    <br>
    <center>
        <h1><a href="" class="btn" data-toggle="modal" data-target="#exampleModalCenter"
                style="background-color:#FB5E35;color:white;font-size:28px;"><i class="fas fa-search"></i>
                ค้นหาน้องไซดไลน์</a></h1>
    </center>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ค้นหา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="search.php" method="GET">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                คุณมองหาบริเวณไหนอยู่?
                                <select name="area" id="area" class="js-example-basic-single form-control"
                                    style="width:435px;">
                                    <option value=""></option>
                                    <?php while($result = mysqli_fetch_assoc($query)): ?>

                                    <option value="<?=$result['name_th']?>"><?=$result['name_th']?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="col-12">
                                คุณชอบแบบไหน?
                                <select name="sex" id="sex" class="custom-select">
                                    <option value="">--เพศ--</option>
                                    <option name="sex" value="girl">หญิง</option>
                                    <option name="sex" value="ladyboy">สาวสอง</option>
                                    <option name="sex" value="ladygirl">สาวสองแปลงแล้ว</option>
                                </select>
                            </div>
                            <div class="col-12">
                                เรทราคาที่ต้องการ

                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input type="text" class="form-control" name="rateprice" placeholder="เรทราคา"
                                        style="background-color: white;color:black;">
                                </div>
                                <p></p>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="confirm" value="1" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <input type="text"  class="form-control" aria-label="Text input with checkbox" style="background-color: white;color:black;"
                                    placeholder="ยืนยันตัวตนแล้วเท่านั่น" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Search">
                </div>
                                    </form>
            </div>
        </div>
    </div>
    <br>
    <div class=" container" style="padding:5px;">

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