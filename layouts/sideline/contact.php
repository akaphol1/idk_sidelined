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
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postsideline.php"><i class="fas fa-map-marker-alt"></i>โพสต์</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt"></i>ออกจากระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding:10px">
        <hr>
        <p>
        <h2><u>คำถามที่พบบ่อย </u><i class="far fa-question-circle"></i></h2>
            <ul>
                <li>1. มีน้องแถว ... ไหมครับ ?<p>
                    โปรดกดค้นหาจากโซนในเว็บได้เลย แอดมินไม่มีส่วนเกี่ยวข้องกับงานของน้องๆ</li></p>

                <li>2. นัดน้องๆทำอย่างไร ? <p>
                        <a href="howtocontact.php" style="color:orange;">อ่านวิธีการนัดน้องๆและคำแนะนำ คลิก</a>
                    </p>
                </li>
                <li>3. น้องตรงปกไหม ? <p>
                        ไม่สามารถตอบได้ น้องส่วนใหญ่จะใช้แอพแต่งเป็นปกติ ฉะนั้นขึ้นอยู่ที่คนมอง
                        หากไปถึงแล้วไม่พอใจสามารถออกมาได้
                        หากอยากเพิ่มความมั่นใจ ให้ไปหาน้องที่มีป้ายเขียวยืนยันเท่านั้น
                    </p>
                </li>
                <li>4. ยืนยันตัวตนคืออะไร ?<p>
                        น้องที่ผ่านการยืนยันตนจากแอดมิน อาจผ่านการวีดีโอคอล ส่งบัตรประชาชน
                        หรือส่งรูปตัวเองแบบเขียนป้ายที่เราออกแบบมา
                        แอดมินจะให้ป้ายต่อเมื่อรูปที่น้องลงเป็นคนเดียวกันกับรูปที่ยืนยัน และไม่ดรอปเกินไป
                    </p>
                </li>
            </ul>
            </p>

    </div>
    <hr>
    <div class="container">
        <hr>
        <p>
        <h2><u>คุณจะติดต่อพวกเราอย่างไร ? </u><i class="fas fa-address-book"></i></h3>
            <ul>
                <li>เราไม่รับการติดต่อเกี่ยวกับการค้นหาน้องๆหรือการนัดน้องๆ เพราะเราเป็นเพียงผู้ให้น้องลงโพสต์โฆษณา</li>
                <li>ไลน์ติดต่อเรื่องทั่วไปใช้เพื่อการติดต่อแอดมินเพื่อสอบถามหรือรีพอร์ตน้องในเว็บเท่านั้น</li>
                <li>โปรดอ่าน คำถามที่พบบ่อย ก่อนถาม</li>
                <li>ติดต่อ ทั่วไป:LINE@</li>
                <li>ติดต่อ ลงโพสต์:LINE@</li>
            </ul>
            </p>
    </div>
    <hr>
    <div class="container">
        <hr>
        <p>
        <h2><u>สนใจลงโพสต์ไซด์ไลน์ทำอย่างไร ? </u><i class="fas fa-paste"></i></h3>
            <a href="howtocreatepost.php" style="color:orange;">คลิกวิธีการลงโพสต์ไซด์ไลน์</a>
            <p>โปรดลงโพสท์รับงานด้วยตนเอง หากเคยลงโพสต์มาก่อนจะใช้เวลาเพียง 3 นาที</p>
            <p></p>ขั้นตอนมีดังนี้
            <ul>
                <li>1.สร้างบัญชีแบบไซด์ไลน์ แล้วเข้าสู่ระบบ</li>
                <li>2.ตรงขวาบนกดที่เมนูบัญชีตัวเอง เลือก "สร้างโพสต์"</li>
                <li>3.กรอกข้อมูลตามคำแนะนำที่ให้ เมื่อส่งฟอร์มแล้วแจ้งชื่อในโพสต์ให้แอดมิน
                    หลังผ่านการยืนยันแอดมินจะส่งเลขบัญชีให้โอน</li>
            </ul>
            หากพบปัญหา หรือต้องการให้ลงด่วน ติดต่อไลน์ของเราได้เลย
            </p>
    </div>
    <hr>
    <div class="container">
        <hr>
        <p>
        <h2><u>ความปลอดภัยและความน่าเชื่อถือของโพสต์และของผู้ใช้งาน </u><i class="fas fa-shield-alt"></i></h2>
        <br>
        <h3>เว็บ Offdek.com เป็นแหล่งรวมโพสต์ไซด์ไลน์ที่ออกแบบมาให้ใช้ง่าย สะดวกสะบายต่อการค้นหา
            และสร้างความน่าเชื่อถือต่อทุกคน เราไม่เปิดเผยข้อมูลส่วนตัวในบัญชีผู้ใช้ เช่น
            บัตรประชาชนหรือภาพเปิดหน้าที่น้องๆใช้ยืนยันรูปภาพ เบอร์โทร ไลน์พิเศษของน้อง</h3>
        <ul>
            <li>น้องไซด์ไลน์ที่เห็นในเว็บทั้งหมด ผ่านการสกรีนโดยทีมแอดมินก่อนถูกโพสต์ (แต่แอดมินก็พลาดได้เช่นกัน
                ช่วยกันแจ้งด้วยหากพบน้องบังคับโอนหรือโกง)</li>
            <li>น้องไซด์ไลน์ที่มีป้าย "ยืนยัน รูปภาพจริง" คือน้องที่ส่งบัตรประชาชนให้เรายืนยันตน
                หรือส่งรูปตนเองพร้อมถ่ายกับป้ายที่เราออกแบบ หรือมาจากเอเย่นที่น่าเชื่อถือ หรือมีสมาชิกในกลุ่ม
                Contributors (คอนทริบิวเตอส์) เคยได้ขึ้นงานมาแล้ว</li>
            <li>กลุ่ม Contributors จะมีชื่อผู้ใช้สีส้มที่พบเห็นได้ตามการบ้าน พวกเขาคือบุคคลน่าเชื่อถือที่สุด</li>

        </ul>
        </p>
    </div>
    <footer class="footer">
      <div class="container">
        <span>!!กรณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตน!!</span>
      </div>
    </footer>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="js/script.js"></script>

</body>

</html>