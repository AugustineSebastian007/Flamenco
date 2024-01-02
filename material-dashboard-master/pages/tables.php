
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>User

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
<style>

      @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap');


      .popup .content {
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%,-150%) scale(0);
       width: 534px;
       height: 450px;
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
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li> -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Tables</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Login</li>
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
                <h6 class="text-white text-capitalize ps-3 pe-3 d-flex justify-content-between">Registration table
                    <!-- <button type="button" rel="tooltip" class="btn btn-info align-right right btn-round btn-just-icon btn-sm first-button" data-original-title="" title="" onclick="togglePopup()">
                      <i class="material-icons">person</i>
                    </button> -->
                </h6>

              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">User Type</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>
                      <!-- <th class="text-secondary opacity-7"></th> -->
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                            $con=mysqli_connect("localhost","root","","music");
                            $q="select * from reg";
                            $r=mysqli_query($con,$q);
                            $i=1;
                            while($row=mysqli_fetch_array($r)){


                    echo "<tr>";
                      echo "<td>";
                        echo "<div class='d-flex px-2 py-1'>";
                          echo "<div class='d-flex flex-column justify-content-center'>";
                            echo "<h6 class='mb-0 text-sm'>",$row['name'],"</h6>";
                            echo "<p class='text-xs text-secondary mb-0'>",$row['email'],"</p>";
                          echo "</div>";
                        echo "</div>";
                      echo "</td>";
                      echo "<td>";
                           $s=$row['usertypeid'];
                           $qqq="select * from usertype where usertypeid=$s";
                           $res=mysqli_query($con,$qqq);
                           $i=1;
                           while($rr=mysqli_fetch_array($res)){


                       if ($rr['usertype']==1){
                         echo "<p class='text-xs font-weight-bold text-secondary mb-0'>User</p>";
                       }
                       elseif ($rr['usertype']==0){
                         echo "<p class='text-xs font-weight-bold text-secondary mb-0'>Admin</p>";
                       }
                       elseif ($rr['usertype']==2){
                         echo "<p class='text-xs font-weight-bold text-secondary mb-0'>Premium Admin</p>";
                       }

                           }

                     echo "</td>";



                      $s=$row['usertypeid'];
                      $qqq="select * from usertype where usertypeid=$s";
                      $res=mysqli_query($con,$qqq);
                      $i=1;
                      while($rr=mysqli_fetch_array($res)){


                  if ($rr['status']==1){
                    echo "<td class='align-middle text-center text-sm'>";
                      echo "<a href='update_status.php?id=".$rr['status']."&user=".$s."'><span class='badge badge-sm bg-gradient-success'>Allowed</span></a>";
                    echo "</td>";
                  }
                  elseif ($rr['status']==0){
                    echo "<td class='align-middle text-center text-sm'>";
                      echo "<a href='update_status.php?id=".$rr['status']."&user=".$s."'><span class='badge badge-sm bg-gradient-danger'>Denied</span></a>";
                    echo "</td>";
                  }


                      }
                      echo "<td class='align-middle text-center'>";
                        echo "<span class='text-secondary text-xs font-weight-bold'>",$row['loc'],"</span>";
                      echo "</td>";

                    echo "</tr>";
                  }
                  ?>
                  <script>
                  function changeStatus() {
                    $('#status-cell').html("<span class='badge badge-sm bg-gradient-danger'>Denied</span>");
                    // You can also use AJAX to send a request to the server and update the status in the database.
                    // For example: $.post('update_status.php', {id: <?php echo $rr['id']; ?>, status: 0});
                  }
                  </script>

                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



      <!--   Core JS Files   -->
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>








      <!-- <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Projects table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Asana</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">60%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Github</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Atlassian</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">30%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Bootstrap</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">working</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">80%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Slack</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">canceled</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">0%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Devto</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold">done</span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </main>
  <div class="popup" id="popup-1">
  <div class="content">
  <div class="close-btn" onclick="togglePopup()">×</div>
  <h1>Sign in</h1>
  <div class="input-field"><p>Enter Email:&nbsp;&nbsp;&nbsp;<input placeholder="Email" class="validate"></p></div>
  <div class="input-field"><p>Image:&nbsp;&nbsp;&nbsp;<input type="file"placeholder="Password" class="validate"></p></div>
  <button class="second-button">Add</button>
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
