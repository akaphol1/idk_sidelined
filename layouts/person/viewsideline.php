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
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="personpage.php">Idk<span>sideline</span></a>
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
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding:20px;">
        <div class="row">

        <?php
        include('connect.php');
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
        $query = "SELECT * FROM createpost WHERE id ='$id' "; 
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);
        echo "<div class='col-sm'>";
        echo "<img class='img-fluid img-thumbnail' src='../controller/upload/".$row['image']."' style='height: 300px;width:300px;'>";
        echo "</div>";
        echo "<div class='col-sm'>";
        echo "<b>".$row['jobname']."</b>";
        echo "<br>";
        echo "<h4><span style='background:#f7f7f7;color:orange;'>"."฿ ".$row['rateprice']."/งาน"."</span></h4>";
        
        echo "<i class='fas fa-map-marked-alt' style='color:red;'></i>".$row['zone'];
        echo "<br>";
        echo "<i class='fas fa-map-marked-alt' style='color:red;'></i>"."รับงาน: ".$row['area'];
        echo "<br>";
        echo "เพศ: ".$row['sex'];
        echo "<br>";
        echo "Line: "."<b><span style='color:green;'>".$row['line']." <i class='fab fa-line'></i>"."</b></span>";
        echo "<br>";
        echo "อายุ: ".$row['age'];
        echo "<br>";
        echo "สัดส่วน: ".$row[''];
           echo "<br>";
        echo "สูง/น้ำหนัก: ".$row['height']."/".$row['weight'];
        echo "<hr>";
        echo "เกี่ยวกับน้อง";
        echo "<br>";
        echo "<br>";
        echo "<p style='white-space:pre-wrap;'>".$row['textsideline']."</p>";
        echo "<hr>";
        echo "</div>";

        }
    mysqli_close($con);
        ?>
        </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="js/script.js"></script>

</body>

</html>