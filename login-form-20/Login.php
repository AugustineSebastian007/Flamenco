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

	<body class="img js-fullheight" style="background-image: url(images/bg.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="#" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" required name="user">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="pass">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="sub" class="form-control btn btn-primary submit px-3">Log In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<!-- <div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div> -->

	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Not a Member ?? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="Signin.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Sign In</a>
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

                            $x=$_POST["user"];
                            $y=$_POST["pass"];

                            $con=mysqli_connect("localhost","root","","music");
                            session_start();
                            $q="select * from login where uname = '$x' AND password ='$y'";
                            $r=mysqli_query($con,$q);
                            $c=mysqli_num_rows($r);
                            if($c>0){
                                $row=mysqli_fetch_array($r);
                                $id=$row["loginid"];
                                $_SESSION["id"]=$id;

                                $q="select * from usertype where usertypeid = '$id'";
                                $r=mysqli_query($con,$q);
                                $d=mysqli_num_rows($r);
                                $row=mysqli_fetch_array($r);
                                  if($d>0){
                                      if( $row['status'] == 0 ){
                                        echo "<script>alert('Access Denied')</script>";
                                        echo"<script>location.href='Login.php'</script>";
                                      }
                                      else{
                                        if( $row['usertype'] == 0 ){
                                          // echo "<script>alert('logged in successfully')</script>";
                                          echo"<script>location.href='../material-dashboard-master/pages/tables.php'</script>";
                                        }
                                        elseif( $row['usertype'] == 1 ||$row['usertype'] == 2  ){
                                          // echo "<script>alert('logged in successfully')</script>";
                                          echo"<script>location.href='../player'</script>";
                                        }
                                      }
                                    }

                            }
                            else {
                              echo "<script>alert('Login Fail')</script>";
                            }
                            mysqli_close($con);
                          }
                            ?>
