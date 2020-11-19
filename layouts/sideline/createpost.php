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
        <a class="navbar-brand navbar-logo" href="sidelinepage.php">Idk<span>sideline</span></a>
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
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="createpost.php"><i class="fas fa-map-marker-alt"></i>โพสต์</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <h2><center>โพสต์ลงงานไซด์ไลน์</center></h2>
    <p>
        <h3><center>ขั้นตอนการลงโพสต์</center></h3>
    </p>
    <div class="contaier">
    <div class="row">
        <div class="col-md-12 col-md-offset-5">
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"><span style="color:blue"><h4>ใส่ข้อมูลโพสต์</h4></span></li>
                    <li><span style="color:blue"><h4>ใส่ข้อมูลเพิ่มเติม</h4></span></li>
                    <li><span style="color:blue"><h4>เลือกแพคเกจ</h4></span></li>
                    <li><span style="color:blue"><h4>เสร็จเรียบร้อย</h4></span></li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">ข้อมูลสำคัญ</h2>
                    <h3 class="fs-subtitle">โปรดกรอกข้อมูลให้ถูกต้องเรียบร้อย</h3>
                    <input type="text" name="fname" placeholder="ชื่อที่ใช้รับงาน" />
                    <input type="text" name="lname" placeholder="เพศ" />
                    <input type="text" name="phone" placeholder="เรทงานเริ่มต้น" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter" />
                    <input type="text" name="facebook" placeholder="Facebook" />
                    <input type="text" name="gplus" placeholder="Google Plus" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">Fill in your credentials</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="pass" placeholder="Password" />
                    <input type="password" name="cpass" placeholder="Confirm Password" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">Fill in your credentials</h3>
                    <input type="text" name="email" placeholder="Email" />
                    <input type="password" name="pass" placeholder="Password" />
                    <input type="password" name="cpass" placeholder="Confirm Password" />
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
            </form>
            <!-- link to designify.me code snippets -->
            <!-- /.link to designify.me code snippets -->
        </div>
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