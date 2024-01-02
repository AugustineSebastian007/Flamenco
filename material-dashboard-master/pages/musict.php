
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
      Music Table
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
          font-size: 27px;
    }
</style>


<style>

    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');

    .popup .content {
     position: absolute;
     top: 92%;
     left: 50%;
     transform: translate(-50%,-150%) scale(0);
     width: 634px;
     height: 1452px;
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
    padding: 10px;
    font-size: 16px;
    border-radius: 10px;
    border: none;
    margin-bottom: 15px;
    color: #bfc0c0;
    background: #262626;
    box-shadow: inset 5px 5px 5px #232323,
                inset -5px -5px 5px #292929;
    outline: none;
    width: 300px;
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
     font-size: 27px;
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


<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
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
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/musict.php">
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
         <a class="nav-link text-white " href="../pages/profile.php">
           <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             <i class="material-icons opacity-10">person</i>
           </div>
           <span class="nav-link-text ms-1">Profile</span>
         </a>
       </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Music</li>
          </ol>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3 d-flex justify-content-between pe-3">Music Table
                  <button type="button" rel="tooltip" class="btn btn-info align-right right btn-round btn-just-icon btn-sm first-button" data-original-title="" title="" onclick="togglePopup()">
                    <i class="material-icons">person</i>
                </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Music ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">artist</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">composer</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">duration</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">artwork</th>
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">lyrics</th> -->
                      <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >description</th> -->
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $c=1;
                            $con=mysqli_connect("localhost","root","","music");
                            $q="select * from music";
                            $r=mysqli_query($con,$q);
                            $i=1;
                            while($row=mysqli_fetch_array($r)){


                    echo "<tr>";
                      echo "<td>";
                        echo "<div class='d-flex px-2 py-1'>";
                          echo "<div class='d-flex flex-column justify-content-center'>";
                            echo "<h6 class='mb-0 text-sm'>",$c,"</h6>";
                          echo "</div>";
                        echo "</div>";
                      echo "</td>";
                      echo "<td>";
                        echo "<p class='text-xs font-weight-bold text-secondary mb-0'>",$row['title'],"</p>";
                      echo "</td>";
                      echo "<td class='align-middle text-center text-sm'>";

                      $id=$row["artistid"];
                      $qq="select * from artist where artistid = '$id'";
                      $rr=mysqli_query($con,$qq);
                      $ro=mysqli_fetch_array($rr);
                        echo "<h6 class='mb-0 text-sm'>",$ro['artist'],"</h6>";
                        $id=$row["albumid"];
                        $qq="select * from album where albumid = '$id'";
                        $rr=mysqli_query($con,$qq);
                        $ro=mysqli_fetch_array($rr);
                        echo "<p class='text-xs text-secondary mb-0'>",$ro['album'],"</p>";
                      echo "</td>";
                      echo "<td class='align-middle text-center'>";

                      $id=$row["composerid"];
                      $qq="select * from composer where composerid = '$id'";
                      $rr=mysqli_query($con,$qq);
                      $ro=mysqli_fetch_array($rr);
                        echo "<h6 class='mb-0 text-sm'>",$ro['composer'],"</h6>";

                        $id=$row["albumid"];
                        $qq="select * from album where albumid = '$id'";
                        $rr=mysqli_query($con,$qq);
                        $ro=mysqli_fetch_array($rr);
                        echo "<p class='text-xs text-secondary mb-0'>",$ro['album'],"</p>";
                      echo "</td>";
                      echo "<td class='align-middle text-center text-sm'>";
                        echo "<p class='text-xs font-weight-bold text-secondary mb-0'>",$row['duration'],"</p>";
                      echo "</td>";
                      echo "<td class='align-middle text-center text-sm'>";
                        echo "<p class='text-xs font-weight-bold text-secondary mb-0'>",$row['year'],"</p>";
                      echo "</td>";
                      echo "<td class='align-middle text-center text-sm'>";
                      echo "<img src='../../player/uploadsing/" . $row['art'] . "' class='avatar-sm'>";
                      echo "</td>";
                      // echo "<td class='align-middle text-center text-sm' style='column-width: 100px;'>";
                      //   echo "<p class='text-xs font-weight-bold text-secondary mb-0'>",$row['lyrics'],"</p>";
                      // echo "</td>";
                      // echo "<td class='align-middle text-center text-sm'>";
                      //   echo "<p class='text-xs font-weight-bold text-secondary mb-0'>",$row['description'],"</p>";
                      // echo "</td>";
                      echo "<td class='align-middle'>";
                      $a=$row['musicid'];
                        echo "<a href='../pages/delete/musicdel.php?id=$a' class='text-secondary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>";
                          echo "Delete";
                        echo "</a>";
                      echo "</td>";
                    echo "</tr>";
                    $c+=1;
                  }
                  ?>


                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </main>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <div class="popup" id="popup-1">
<div class="content">
<div class="close-btn" onclick="togglePopup()">×</div>
<h1>Add Music</h1>
<form action="" method="post" enctype="multipart/form-data">


<div class="input-field"><p>Enter Title:&nbsp;&nbsp;&nbsp;<input placeholder="Title" name="name" class="validate"></p></div>

<div class="input-field"><p>Enter Artist:&nbsp;&nbsp;&nbsp;
    <select name="artist" id="cars" class="validate">
      <?php
              $con=mysqli_connect("localhost","root","","music");
              $q="select * from artist";
              $r=mysqli_query($con,$q);
              $i=1;

              while($row=mysqli_fetch_array($r)){
                  echo"<option value=",$row['artistid'],">",$row['artist'],"</option>";
                }
        ?>
    </select>
  </p>
</div>

<div class="input-field"><p>Enter Composer:&nbsp;&nbsp;&nbsp;
    <select name="com" id="cars" class="validate">
      <?php
              $con=mysqli_connect("localhost","root","","music");
              $q="select * from composer";
              $r=mysqli_query($con,$q);
              $i=1;

              while($row=mysqli_fetch_array($r)){
                  echo"<option value=",$row['composerid'],">",$row['composer'],"</option>";
                }
        ?>
    </select>
  </p>
</div>

<div class="input-field"><p>Enter Album:&nbsp;&nbsp;&nbsp;
    <select name="std" id="cars" class="validate">
      <?php
              $con=mysqli_connect("localhost","root","","music");
              $q="select * from Album";
              $r=mysqli_query($con,$q);
              $i=1;

              while($row=mysqli_fetch_array($r)){
                  echo"<option value=",$row['Albumid'],">",$row['Album'],"</option>";
                }
        ?>
    </select>
  </p>
</div>

<div class="input-field"><p>Enter Category:&nbsp;&nbsp;&nbsp;
    <select name="cat" id="cars" class="validate">
      <?php
              $con=mysqli_connect("localhost","root","","music");
              $q="select * from cat";
              $r=mysqli_query($con,$q);
              $i=1;

              while($row=mysqli_fetch_array($r)){
                  echo"<option value=",$row['catid'],">",$row['cat'],"</option>";
                }
        ?>
    </select>
  </p>
</div>

<div class="input-field"><p>Enter Duration:&nbsp;&nbsp;&nbsp;<input placeholder="Duration" name="dur" class="validate"></p></div>

<div class="input-field"><p>Enter Format:&nbsp;&nbsp;&nbsp;<input placeholder="Format" name="format" class="validate"></p></div>

<div class="input-field"><p>Enter Bitrate:&nbsp;&nbsp;&nbsp;<input placeholder="Bitrate" name="bitr" class="validate"></p></div>

<div class="input-field"><p>Enter Album:&nbsp;&nbsp;&nbsp;<input placeholder="Album" name="al" class="validate"></p></div>

<div class="input-field"><p>Enter Lyrics:&nbsp;&nbsp;&nbsp;<textarea placeholder="Lyrics" name="lyr" class="validate"></textarea> </p></div>

<div class="input-field"><p>Enter Description:&nbsp;&nbsp;&nbsp;<textarea placeholder="Description" name="des" class="validate"></textarea></p></div>

<div class="input-field"><p>Enter Type:&nbsp;&nbsp;&nbsp;<input placeholder="Type" name="type" class="validate"></p></div>

<div class="input-field"><p>Enter BPM:&nbsp;&nbsp;&nbsp;<input rows="5" cols="33" placeholder="BPM"   class="validate"></p></div>

<div class="input-field"><p>Enter Year:&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Year" name="yr" class="validate"></p></div>

<div class="input-field"><p>Image:&nbsp;&nbsp;&nbsp;<input type="file" placeholder="Password"  name="file" class="validate"></p></div>

<button type="submit" class="second-button" name="sub">Add</button>

</form>
</div>
</div>


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
<?php
  if(isset($_POST["sub"])){
          $a=$_POST["name"];
          $b=$_POST["artist"];
          $c=$_POST["com"];
          $d=$_POST["std"];
          $e=$_POST["dur"];
          $f=$_POST["cat"];
          $g=$_POST["format"];
          $h=$_POST["bitr"];
          $i=$_POST["al"];
          $j=$_POST["lyr"];
          $k=$_POST["des"];
          $l=$_POST["type"];
          $m=$_POST["bpm"];
          $n=$_POST["yr"];
          $image=$_FILES["file"]["name"];
          $con=mysqli_connect("localhost","root","","music");
          $q="INSERT INTO `music`(`title`, `artistid`, `catid`, `format`, `bitrate`, `type`, `duration`, `album`, `lyrics`, `year`, `bpm`, `Albumid`, `art`, `description`, `composerid`)
                          VALUES ('$a','$b','$f','$g','$h','$l','$e','$i','$j','$n','$m','$d','$image','$k','$c')";
          $r=mysqli_query($con,$q);
          if($r)
          {
            $targetDir="uploads/";
            $targetFilePath=$targetDir.$image;
            move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath);
          }
          if($r)
          {
              echo "<script>alert('value added successfully')</script>";
              echo"<script>location.href='../pages/musict.php'</script>";
          }
          mysqli_close($con);
        }
  ?>
