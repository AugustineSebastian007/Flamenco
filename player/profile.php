<?php
		session_start();
		$idd = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","","music");
		$q="select * from reg where loginid ='$idd'";
		$re=mysqli_query($con,$q);
		$row=mysqli_fetch_array($re);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords"
        content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
    <title>Listen App - Online Music Streaming App</title>
    <link href="images/logos/favicon.png" rel="icon">
    <link rel="apple-touch-icon" href="images/logos/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/logos/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logos/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="images/logos/touch-icon-ipad-retina.png">
    <link href="css/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="css/styles.bundle.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fpdf/1.83/fpdf.js"></script>
		<script src= "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js">
      </script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="line_loader"></div>
    <div id="loader">
        <div class="loader">
            <div class="loader__eq mx-auto"><span></span> <span></span> <span></span> <span></span> <span></span>
                <span></span></div><span class="loader__text mt-2">Loading</span>
        </div>
    </div>
    <div id="wrapper">
        <aside id="sidebar">
            <div class="sidebar-head d-flex align-items-center justify-content-between"><a href="home.php"
                    class="brand external"><img src="images/logos/logo.png" alt="Listen app"> </a><a
                    href="javascript:void(0);" role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
                    <div class="d-none d-lg-block"><i class="ri-menu-3-line sidebar-menu-1"></i> <i
                            class="ri-menu-line sidebar-menu-2"></i></div><i class="ri-menu-fold-line d-lg-none"></i>
                </a></div>
                <div class="sidebar-body" data-scroll="true">
                   <nav class="navbar d-block p-0">
                      <ul class="navbar-nav">
                         <li class="nav-item"><a href="home.php" class="nav-link d-flex align-items-center "><i class="ri-home-4-line fs-5"></i> <span class="ps-3">Home</span></a></li>
                         <li class="nav-item"><a href="genres.php" class="nav-link d-flex align-items-center"><i class="ri-disc-line fs-5"></i> <span class="ps-3">Genres</span></a></li>
                         <li class="nav-item"><a href="music.php" class="nav-link d-flex align-items-center"><i class="ri-music-2-line fs-5"></i> <span class="ps-3">Music</span></a></li>
                         <li class="nav-item"><a href="albums.php" class="nav-link d-flex align-items-center"><i class="ri-album-line fs-5"></i> <span class="ps-3">Albums</span></a></li>
                         <li class="nav-item"><a href="artists.php" class="nav-link d-flex align-items-center"><i class="ri-mic-line fs-5"></i> <span class="ps-3">Artists</span></a></li>
                         <!-- <li class="nav-item"><a href="stations.html" class="nav-link d-flex align-items-center"><i class="ri-radio-2-line fs-5"></i> <span class="ps-3">Stations</span></a></li> -->
                         <li class="nav-item nav-item--head"><span class="nav-item--head__text">Music</span> <span class="nav-item--head__dots">...</span></li>
                         <li class="nav-item"><a href="favorites.php" class="nav-link d-flex align-items-center"><i class="ri-heart-line fs-5"></i> <span class="ps-3">Favorites</span></a></li>
                         <!-- <li class="nav-item"><a href="history.html" class="nav-link d-flex align-items-center"><i class="ri-history-line fs-5"></i> <span class="ps-3">History</span></a></li> -->
                      </ul>
                   </nav>
                </div>

        </aside>
        <!-- searchbar -->
        <?php
					include 'components/navbar.php';
				 ?>
        <!-- end searchbar -->
        <main id="page_content">
            <div class="hero" style="background-image: url(images/banner/event.jpg);"></div>
            <div class="under-hero container">
                <div class="section">
                    <div class="plan bg-light">
                        <div class="card plan__info overflow-hidden">
                            <div class="card-body d-flex flex-column p-0">
                                <div class="p-4">
                                    <h4 class="mb-3">Edit <span class="text-primary">Profile</span></h4>
                                    <p class="fs-6">Customize and manage personal information, keep profile up-to-date and relevant</p>
                                </div>
                                <div class="px-3 text-center mt-auto"><img src="images/misc/plan.png" class="img-fluid"
                                        alt=""></div>
                            </div>
                        </div>
                        <div class="plan__data">
                            <div class="px-4 pt-2 pe-xl-0 pt-sm-0 mt-4 mb-3 my-sm-0 w-100">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="avatar avatar--xl">
                                        <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div>
                                    </div>
                                    <!-- <div class="ps-3"><input type="file" id="profile" class="d-none"> <label
                                            for="profile" class="btn btn-default rounded-pill">Change image</label>
                                    </div> -->
                                </div>
                                <?php
            	                    $id=$row["loginid"];
            	                    $q="select * from login where loginid = '$id'";
            	                    $r=mysqli_query($con,$q);
            	                    $d=mysqli_num_rows($r);
            	                    $ro=mysqli_fetch_array($r);
                                 ?>
                                 <form action="javascript:void(0);" method="post" enctype="multipart/form-data" >
                                <div class="row g-4">

                                    <div class="col-sm-6"><label for="f_name" class="form-label fw-medium">Full Name</label> <input type="text" id="name" class="form-control"
                                            value=<?php echo $row['name'] ; ?> name="name" ></div>

                                    <div class="col-sm-6"><label for="d_name" class="form-label fw-medium">Email</label> <input type="text" id="email" class="form-control"
                                            value=<?php echo $row['email'] ; ?> name="email"></div>
                                    <div class="col-sm-6"><label for="l_name" class="form-label fw-medium">Username</label> <input type="text" id="l_name" class="form-control"
                                            value=<?php echo $ro['uname'] ; ?> name="user" disabled></div>
                                    <!-- <div class="col-sm-6"><label for="l_name" class="form-label fw-medium">Password</label> <input type="text" id="l_name" class="form-control"
                                            value= name="user"></div> -->
                                    <div class="col-sm-6"><label for="location"
                                            class="form-label fw-medium">Location</label> <input type="text"
                                            id="loc" class="form-control" value=<?php echo $row['loc'] ; ?> name="loc"></div>
                                            <span id="user-availability-status" ></span>
                                    <!-- <div class="col-12"><label for="about" class="form-label fw-medium">About</label>
                                        <textarea name="about" id="about" cols="30" rows="5"
                                            class="form-control"></textarea>
                                    </div> -->
                                    <div class="col-12">
                                      <button type="submit" onclick="addprof()" class="btn btn-primary" name="sub">Save changes</button>
                                    <button class="btn btn-primary" id="pdfButton">Profile Card</button>
                                          </div>
                                        <script>
                                        var button = document.getElementById("pdfButton");
                                         button.addEventListener("click", function() {
                                        var doc = new jsPDF();
                                        var name = "<?php echo $row['name']; ?>";
                                        var usertype = "<?php

                                        $q="select * from usertype where usertypeid ='$idd'";
                                        $ree=mysqli_query($con,$q);
                                        $rowww=mysqli_fetch_array($ree);
                                            if($rowww['usertype']==1){
                                                echo "Free User" ;
                                            }
                                            elseif($rowww['usertype']==0){
                                                echo "Admin" ;
                                            }
                                            elseif($rowww['usertype']==2){
                                                echo "Premium User" ;
                                            }
                                            ?>";
                                        var username = "<?php echo $ro['uname'] ; ?>";

                                        var location = "<?php echo $row['loc'] ; ?>";
                                        var email = "<?php echo $row['email'] ; ?>";

                                        doc.rect(10, 10, 90, 50);
                                        var img = new Image();
                                        img.src = 'images/users/thumb.jpg';
                                        doc.addImage(img, 'JPEG', 12, 12, 25, 25);

                                        doc.setFont('Arial', 'bold');
                                        doc.setFontSize(12);
                                        doc.text(name, 40, 15);
                                        doc.setFontSize(10);
                                        doc.text(usertype, 40, 20);

                                        doc.setFontSize(8);
                                        doc.text("Username: " + username, 40, 30);
                                        doc.text("Location: " + location, 40, 35);
                                        doc.text("Email: " + email, 40, 40);

                                        // Open PDF in new tab
                                        var pdfData = doc.output('blob');
                                        var pdfUrl = URL.createObjectURL(pdfData);
                                        window.open(pdfUrl);
                                    });
                                </script>

<script>
												function addprof() {
                                                    $("#loaderIcon").show();
                                                    jQuery.ajax({
                                                        url: "phpexec/profileedit.php",
                                                        data: {
                                                            name: $("#name").val(),
                                                            email: $("#email").val(),
                                                            loc: $("#loc").val()
                                                            },
                                                        type: "POST",
                                                        success: function(data) {
                                                        $("#user-availability-status").html(data);
                                                        },
                                                        error: function() {}
                                                    });
                                                    }

                                                    
												</script>

                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <footer id="footer">

            </footer> -->
        </main>
    </div>
    <div id="player">
         <div class="container">
					 <?php
						 include 'components/musicbar.php';
						?>
         </div>
      </div>
    <div id="backdrop"></div>
    <script src="js/plugins.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
</body>

</html>
