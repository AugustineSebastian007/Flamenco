<?php
		session_start();
		$id = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","","music");
		$q="select * from reg where loginid ='$id'";
		$re=mysqli_query($con,$q);
		$row=mysqli_fetch_array($re);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Profile Page
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

		@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');

		/* h6{
		  font-size: 2rem;
		}
		h7{
		  font-size: 1.1rem;
		}
		.text-dark{
		  font-size: 1.2rem;
		} */
		.popup .content {
		 position: absolute;
		 top: 50%;
		 left: 50%;
		 transform: translate(-50%,-150%) scale(0);
		 width: 534px;
		 height: 690px;
		 z-index: 2;
		 text-align: center;
		 padding: 20px;
		 border-radius: 20px;
		 background: #262626;
		 box-shadow:  38px 38px 156px #1e1e1e;
		 z-index: 1;
		}
		.popup .close-btn {
		position: absolute;
		right: 20px;
		top: 20px;
		width: 30px;
		height: 30px;
		color: white;
		font-size: 30px;
		border-radius: 50%;
		padding: 2px 5px 7px 5px;
		background: #262626;
		box-shadow:  8px 8px 15px #202020,
		             -8px -8px 15px #2c2c2c;
		}

		.popup.active .content {
		transition: all 300ms ease-in-out;
		transform: translate(-50%,-50%) scale(1);
		}
		.first-button:active {
		background: linear-gradient(145deg, #222222, #292929);
		box-shadow:  5px 5px 10px #262626,
		             -5px -5px 10px #262626;
		border: none;
		}

		.input-field .validate {
		padding: 20px;
		font-size: 16px;
		border-radius: 10px;
		border: none;
		margin-bottom: 15px;
		color: #bfc0c0;
		background: #262626;
		box-shadow: inset 5px 5px 5px #232323,
		            inset -5px -5px 5px #292929;
		outline: none;
		}

		.second-button {
		color: white;
		font-size: 18px;
		font-weight: 500;
		margin-top: 20px;
		padding: 20px 30px;
		border-radius: 40px;
		border: none;
		background: #262626;
		box-shadow:  8px 8px 15px #202020,
		             -8px -8px 15px #2c2c2c;
		transition: box-shadow .35s ease !important;
		outline: none;
		}
		.second-button:active{
		box-shadow: 5px 5px 10px #262626, -5px -5px 10px #262626;
		border: none;
		outline: none;
		}
		h1 {
		 text-align: center;
		 font-size: 32px;
		 font-weight: 600;
		 padding-top: 20px;
		 padding-bottom: 10px;
		 font-family: raleway;
		  color: white;
		}
		p {
		 font-size: 17px;
		 font-weight: 600;
		 font-family: raleway;
		  color: white;
		}
		.navbar-vertical.navbar-expand-xs .navbar-collapse {
		  display: block;
		  overflow: auto;
		  height: calc(100vh - 120px);
		}
</style>


<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Tables</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/artist.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Artist</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/comt.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Composer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/stut.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Album</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/catt.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/subcatt.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Sub-Category</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/musict.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Music</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
				<li class="nav-item">
          <a class="nav-link text-white " href="logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Admin
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                Admin
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
            <div class="col-12 col-xl-4">

                <!-- <div class="card-body p-3">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Account</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault">Email me when someone follows me</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault1">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault1">Email me when someone answers on my post</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault2" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault2">Email me when someone mentions me</label>
                      </div>
                    </li>
                  </ul>
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Application</h6>
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault3">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault3">New launches and projects</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault4" checked>
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault4">Monthly product updates</label>
                      </div>
                    </li>
                    <li class="list-group-item border-0 px-0 pb-0">
                      <div class="form-check form-switch ps-0">
                        <input class="form-check-input ms-auto" type="checkbox" id="flexSwitchCheckDefault5">
                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0" for="flexSwitchCheckDefault5">Subscribe to newsletter</label>
                      </div>
                    </li>
                  </ul>
                </div> -->

            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a >
                        <i class="fas fa-user-edit text-secondary text-sm  btn-sm" onclick="togglePopup()" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
										<form action="#" class="signin-form" method="post">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <h7><?php echo $row['name'] ; ?></h7></li>
                    <?php
	                    $idd=$row["loginid"];
	                    $q="select * from login where loginid = '$idd'";
	                    $r=mysqli_query($con,$q);
	                    $d=mysqli_num_rows($r);
	                    $ro=mysqli_fetch_array($r);
                     ?>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Username:</strong> &nbsp; <h7><?php echo $ro['uname'] ; ?></h7></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Password:</strong> &nbsp; <h7>*************</h7>
										</li>

                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <h7><?php echo $row['email'] ; ?></h7></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; <h7><?php echo $row['loc'] ; ?></h7></li>
									</form>
									</ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <div class="popup" id="popup-1">
    <div class="content">
    <div class="close-btn" onclick="togglePopup()">×</div>
    <h1>Edit Profile</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="input-field"><p>Full Name:&nbsp;&nbsp;&nbsp;<input value=<?php echo $row['name'] ; ?> name="name" class="validate"></p></div>
      <div class="input-field"><p>Username:&nbsp;&nbsp;&nbsp;<input value=<?php echo $ro['uname'] ; ?> name="user" class="validate" disabled></p></div>
      <div class="input-field"><p>Password:&nbsp;&nbsp;&nbsp;<input value=<?php echo $ro['password'] ; ?> name="pass" class="validate"></p></div>
      <div class="input-field"><p>Email:&nbsp;&nbsp;&nbsp;<input value=<?php echo $row['email'] ; ?> name="email" class="validate"></p></div>
      <div class="input-field"><p>Location:&nbsp;&nbsp;&nbsp;<input value=<?php echo $row['loc'] ; ?> name="loc" class="validate"></p></div>
    <button type="submit" class="second-button" name="sub">Edit</button>
    </div>
  </div>
  <?php
  							if(isset($_POST["sub"])){
	  							$x=$_POST["name"];
	  							$y=$_POST["loc"];
	  							$z=$_POST["email"];
	                $b=$_POST["pass"];

	  							$con=mysqli_connect("localhost","root","","music");

	  							$q="	UPDATE `reg` SET `name`='$x',`loc`='$y',`email`='$z' WHERE loginid='$id'";
	  							$r=mysqli_query($con,$q);
	  							if($r)
	  							{
	                  $qr="UPDATE `login` SET `password`='$b' WHERE loginid='$id'";
	                  $rr=mysqli_query($con,$qr);
	  							}
	  							if($rr)
	  							{
	  								echo "<script>alert('data changed successfully')</script>";
	  				        echo"<script>location.href='profile.php'</script>";
	  							}
	  							else {
	  			          echo "<script>alert('update unsuccessfull')</script>";
	  			        }

	  							mysqli_close($con);
  							}

  		?>

  <script>
    function togglePopup() {
      document.getElementById("popup-1")
      .classList.toggle("active");
    }
  </script>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
