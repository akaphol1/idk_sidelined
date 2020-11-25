<?php
require_once('../connection/connect.php');

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
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php"><i class="fas fa-calendar-check"></i>ข้อมูล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocontact.php"><i class="fas fa-map-marker-alt"></i>วิธีการนัดน้องๆ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="howtocreatepost.php"><i
                            class="fas fa-map-marker-alt"></i>วิธีการลงโพสต์ไซด์ไลน์</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Register</h5>
                        <form class="form-signin"  method="POST" id="login"
                            class="form-horizontal">

                            <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username"  placeholder="Username" required autofocus autocomplete="off">
                <label for="inputEmail">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
                   


                            <div class="form-group">
                                <label for="">คุณคือใคร:</label>
                                <input type="radio" id="level" name="level" value="person"><span>
                                    นักเที่ยวมาหาน้องๆ</span>
                                    <input type="radio" id="level" name="level" value="sideline"><span>
                                    นักเที่ยวมาหาน้องๆ</span>
                                <input type="radio" id="level" name="level" value="1"><span>
                                    น้องไซด์ไลน์</span>
                                <br>
                                <input type="checkbox" id="over18" name="over18" required><span>
                                    คุณยอมรับว่ามีอายุมากกว่า 18 ปี</span>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" id="reg_user"
                                name="reg_user" type="submit">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <footer class="footer-sign">
      <div class="container">
        <span>!!กรณาอย่าโอนให้น้องที่ไม่ได้ยืนยันตน!!</span>
      </div>
    </footer>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
	$(function(){
		$('#reg_user').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var username 	= $('#inputEmail').val();
			var password	= $('#inputPassword').val();
			var level		= $('#level').val();

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: '../controller/actionregister.php',
					data: {username: username,password: password,level: level},
					success: function(data){
                        if(data ==="Sorry... Username Already"){
                            Swal.fire({
								title: 'Warning!!',
								text: data,
								icon: 'error'
								})
                        }else{
                            Swal.fire({
								title: 'Successfully',
								text: 'Register SuccessFull',
								icon: 'success'
								})
                        }

							
					},
					error: function(data){
						Swal.fire({
								title: 'Errors',
								text: 'There were errors while saving the data.',
								icon: 'error'
								})
					}
				});
			}
		});		
	});
	
</script>
</body>

</html>