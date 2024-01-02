
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>

  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<style>
.bg-gradient-primary {
  background-image: linear-gradient(195deg, #ff4400 0%, #fb8c00 100%);
}
.btn{
    margin-bottom: 0rem;
}
body{
    line-height: 0.8;
}
</style>

</html>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

	</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var ver = 1;
    $(document).ready(function () {
        $("#error1").hide();
        $("#error2").hide();
        $("#error3").hide();
        $("#error4").hide();
        $("#error5").hide();
        $("#error6").hide();
        var name = /^[a-zA-Z0-9\-\_]+$/;
        $("#p5").keyup(function() {
            x = document.getElementById("p5").value;
            if (name.test(x) == false) {
                ver = 1
                $("#error6").show();
            } else if (name.test(x) == true) {
                ver = 0;
                $("#error6").hide();
            }
        });
        $("#p1").keyup(function () {
            x = document.getElementById("p1").value;
            if (name.test(x) == false) {
                ver = 1
                $("#error1").show();
            }
            else if (name.test(x) == true) {
                ver = 0;
                $("#error1").hide();
            }
        });
        var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        $("#p2").keyup(function () {
            x = document.getElementById("p2").value;
            if (mail.test(x) == false) {
                ver = 1;
                $("#error2").show();
            }
            else if (mail.test(x) == true) {
                ver = 0;
                $("#error2").hide();
            }
        });


        // @{
        //     var maill = @"^\\w+([.-]?\\w+)*@\\w+([.-]?\\w+)*(\\.\\w{2,3})+$";
        // }
        //     var mail = new RegExp("@maill");
        //     $("#p2").keyup(function () {
        //
        //         x = document.getElementById("p2").value;
        //         if (mail.test(x) == false) {
        //             ver = 1;
        //             $("#error2").show();
        //         }
        //         else if (mail.test(x) == true) {
        //             ver = 0;
        //             $("#error2").hide();
        //         }
        //     });





        var pass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        $("#p3").keyup(function () {
            x = document.getElementById("p3").value;
            if (pass.test(x) == false) {
               ver = 1;
                $("#error3").show();
            }
            else if (pass.test(x) == true) {
                ver = 0;
                $("#error3").hide();
            }
        });
        $("#p4").keyup(function () {
            pass1 = document.getElementById("p3").value;
            pass2 = document.getElementById("p4").value;
            if (pass1 != pass2) {
                ver = 1
                $("#error4").show();
            }
            else {
                ver = 0
                $("#error4").hide();
            }
        });
        $("#submit").focus(function () {
            if (ver == 0)
                $("#error5").hide();
            else
                $("#error5").show();
        });
    });
</script>
	<body class="img js-fullheight" style="background-image: url(images/bg.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Signin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Create an account?</h3>
		      	<form action="#" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" id="p5" class="form-control" placeholder="Name" required name="name">
                          <p id="error6" class="err" align="center">Only alphabets are allowed</p>
		      		</div>
              <div class="form-group">
		      			<input type="Email" id="p2" class="form-control" placeholder="Email" required name="email">
                          <p id="error2" class="err" align="center">Use a valid email address</p>
		      		</div>
              <div class="form-group">
		      			<input type="text" class="form-control" placeholder="Country" required name="country">
		      		</div>
              <div class="form-group">
		      			<input type="text" id="p1" class="form-control" placeholder="Username" required name="username">
                          <p id="error1" align="center" class="err">Spaces and Special characters not allowed(Except _)</p>
		      		</div>
	            <div class="form-group">
                <span toggle="#p3" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <input id="p3" type="password" class="form-control" placeholder="Password" required name="password">

	            </div>
              <p id="error3" class="err" align="center">Password should include at-least eight characters,uppercase letter,lowercase
                letter,number and special character.</p>
              <div class="form-group">
                    <span toggle="#p4" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	              <input id="p4" type="password" class="form-control" placeholder="Confirm Password" required>
	            </div>
              <p id="error4" class="err" align="center">Both passwords should match.</p>
            <p id="error5" class="err" align="center">Please fill the form correctly.</p>
	            <div class="form-group">
	            	<button type="submit" name="sub" class="form-control btn btn-primary submit px-3">Register</button>
	            </div>
	            <div class="form-group d-md-flex">

	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Already a Member ?? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="Login.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Log In</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

 <?php
	if(isset($_POST["sub"])){
	$x=$_POST["name"];
	$y=$_POST["country"];
	$z=$_POST["email"];
  $a=$_POST["username"];
	$b=$_POST["password"];



	$con=mysqli_connect("localhost","root","","music");
	$q="INSERT INTO `reg`( `name`,`email`,`loc`) VALUES ('$x','$z','$y')";
	$r=mysqli_query($con,$q);
  print_r($r);
	if($r){
	       $id=mysqli_insert_id($con);
         $qr="update reg set loginid = '$id' where regid='$id'";
         $rs=mysqli_query($con,$qr);
         $qr="update reg set usertypeid = '$id' where regid='$id'";
         $rs=mysqli_query($con,$qr);
	       $qrs="insert into login (`loginid`,`uname`,`password`) values('$id','$a','$b')";
	       $rs=mysqli_query($con,$qrs);


	        if($rs){
            $id=mysqli_insert_id($con);
            $qrs="insert into usertype (`usertypeid`,`status`,`usertype`) values('$id','1','1')";
            $rs=mysqli_query($con,$qrs);
	         }
           if($rs){
		         echo "<script>alert('value added successfully')</script>";
	          }
	       echo"<script>location.href='Login.php'</script>";

	      }
	mysqli_close($con);
		}
?>
