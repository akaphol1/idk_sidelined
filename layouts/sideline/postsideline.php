<?php
 session_start(); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - bootstrap 4 navbar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="sidelinepage.php">Idk<span>sideline</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="postsideline.php"><i class="fas fa-map-marker-alt"></i>โพสต์</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <h2>
        <center>โพสต์ของคุณ</center>
        <a href="createpost.php" class="btn btn-primary">Create Post</a>
        <hr>
    </h2>
    <div class="container">
        <div class="row">
            <?php
            include('../connection/connect.php');
            $query = "SELECT * FROM createpost WHERE username ='".$_SESSION["username"]."'"; 
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)){
            echo "<div class='col-md-4'>";
            echo "<div class='card card-body'>";
            
            echo "<img class='img-fluid img-thumbnail' src='upload/".$row['image']."' style='height: 300px;'>";
            echo "<h5 class='card-title'>".$row['zone']."</h5>";
            echo "<p class='card-text'>".$row['area']."</p>";
            echo "<h4 class='card-footer'>".$row['rateprice']."฿</h4>";
            echo "</div>";
            echo "</div>";
        }
        mysqli_close($con);
            ?>
        </div>
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="js/script.js"></script>

</body>

</html>