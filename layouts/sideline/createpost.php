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
    <h2>
        <center>โพสต์ลงงานไซด์ไลน์</center>
    </h2>
    <p>
    <h3>
        <center>ขั้นตอนการลงโพสต์</center>
    </h3>
    </p>
    <div class="contaier">
        <div class="row">
            <div class="col-md-12 col-md-offset-5">
                <form id="msform" action="../controller/actioncreatepost.php" method="POST" id="login" class="form-horizontal">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active"><span style="color:blue">
                                <h4>ใส่ข้อมูลโพสต์</h4>
                            </span></li>
                        <li><span style="color:blue">
                                <h4>ใส่ข้อมูลเพิ่มเติม</h4>
                            </span></li>
                        <li><span style="color:blue">
                                <h4>เลือกแพคเกจ</h4>
                            </span></li>
                        <li><span style="color:blue">
                                <h4>เสร็จเรียบร้อย</h4>
                            </span></li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">ข้อมูลสำคัญ</h2>
                        <h3 class="fs-subtitle">โปรดกรอกข้อมูลให้ถูกต้องเรียบร้อย</h3>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">ชื่อที่รับงาน :</label>
                            <div class="col-sm-5">
                                <input type="text" name="jobname" placeholder="ชื่อที่ใช้รับงาน" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">เพศ :</label>
                            <div class="col-sm-5">
                                <select name="sex" id="sex" class="form-control">
                                    <option value="">--เพศ--</option>
                                    <option name="sex" value="girl">หญิง</option>
                                    <option name="sex" value="ladyboy">สาวสอง</option>
                                    <option name="sex" value="ladygirl">สาวสองแปลงแล้ว</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">เรทราคางานเริ่มต้น :</label>
                            <div class="col-sm-5">
                                <input type="text" name="rateprice" placeholder="1500" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">พื้นที่รับงานที่จะใช้แสดงหน้าโพสต์ :</label>
                            <div class="col-sm-5">
                                <input type="text" name="area" placeholder="ไม่เกิน 26 ตัวอักษร" />
                                <small> เช่น: "บริเวณจตุจักร", หรือ "รัชดา 17" เป็นต้น</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label"><span style="color:red;">*(สำคัญมาก!)
                                </span>โซนรับงาน ที่ใกล้ที่สุด :</label>
                            <div class="col-sm-5">
                                <input type="text" name="zone" placeholder="ไม่เกิน 26 ตัวอักษร" />
                                <small style="color:red"> *ลูกค้าจะค้นหาคุณด้วย Zone ฉะนั้นโปรดเลือกให้ถูก</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">ข้อความเกี่ยวกับน้อง :</label>
                            <div class="col-sm-5">
                                <textarea name="text" style="height: 200px;"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">รูปภาพ :</label>
                            <div class="col-sm-5">
                                <small>รูปภาพจะถูกแสดงเป็นภาพหลักหน้าโพสต์</small>
                                <input type="file" name="image" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">Line ID ที่จะใช้รับงาน :</label>
                            <div class="col-sm-5">
                                <input type="text" name="line" />
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                        <h2 class="fs-title">ข้อมูลเพิ่มเติม(ไม่จำเป็น)</h2>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">อายุ :</label>
                            <div class="col-sm-5">
                                <input type="text" name="jobname" placeholder="ปี" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">ส่วนสูง :</label>
                            <div class="col-sm-5">
                                <input type="text" name="jobname" placeholder="เซนติเมตร" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-5 col-form-label">น้ำหนัก :</label>
                            <div class="col-sm-5">
                                <input type="text" name="jobname" placeholder="กิโลกรัม" />
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                        <h2 class="fs-title">กรุณาเลือกแพคเก็จเริ่มต้น</h2>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ระยะเวลา</th>
                                    <th scope="col">ค่าธรรมเนียม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><input type="radio" name="dayforprice" id="dayforprice"
                                            value="7days"> 7 วัน</th>
                                    <td>฿150 (วันละ ฿21)</td>
                                </tr>
                                <tr>
                                    <th scope="row"><input type="radio" name="dayforprice" id="dayforprice"
                                            value="1months"> 1 เดือน</th>
                                    <td>฿500 (วันละ ฿16) - แนะนำ</td>
                                </tr>
                                <tr>
                                    <th scope="row"><input type="radio" name="dayforprice" id="dayforprice"
                                            value="3months"> 3 เดือน</th>
                                    <td>฿1300 (วันละ ฿14)</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <h2>เลือกวิธีการชำระ</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ช่องทางการชำระ</th>
                                    <th scope="col">วิธีการชำระ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">ช่องทางการส่งสลิป</th>
                                    <td>
                                        <input type="radio" name="howtopay" id="howtopay"
                                            value="slipforline">ส่งสลิปทางไลน์ภายหลัง
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td><input type="radio" name="howtopay" id="howtopay"
                                            value="slipbefore">ส่งสลิปพร้อมกับโพสต์ (ลูกค้าเก่าเท่านั้น)</td>
                                </tr>



                            </tbody>
                        </table>
                        <h2>ส่งสลิปทางไลน์ภายหลัง</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ค่าใช้จ่าย</th>
                                    <th scope="col">15000</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                    กดลงโพสต์ก่อน แล้วส่งชื่อในโพสต์ให้แอดมิน
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>


                    <fieldset>
                    <i class="fas fa-check-circle fa-10x" style="color: green;"></i>
                        <h2 class="fs-title">สร้างโพสต์เรียบร้อย</h2>
                        <h2 class="fs-title">โปรดส่งชื่อน้องในโพสต์มาที่ไลน์</h2>
                        <h2 class="fs-title">Line: <a href="#" style="text-decoration: none;color:green;"><u>แอดมินบีบิว</u></a> <i class="fab fa-line" style="color:green"></i></h2>
                        <h2 class="fs-title">คุณสามารถปิดหน้านี้ได้</h2>
                        <input type="submit" value="Submit" class="submit action-button" value="ชมหน้าโพสต์" />
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