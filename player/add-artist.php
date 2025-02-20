<!DOCTYPE html>
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
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/add-music.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2023 04:20:50 GMT -->

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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet"><!--[if lt IE 9]>
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
                    <li class="nav-item"><a href="home.php" class="nav-link d-flex align-items-center active"><i class="ri-home-4-line fs-5"></i> <span class="ps-3">Home</span></a></li>
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
            <div class="hero" style="background-image: url(images/banner/song.jpg);"></div>
            <div class="under-hero container">
                <div class="section">
                    <div class="row">
                        <div class="col-xl-7 col-md-10 mx-auto">

                          <!-- the add music card -->
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="mat-tabs">
                                        <ul class="nav nav-tabs" id="add_music" role="tablist">
                                            <li class="nav-item" role="presentation"><button class="nav-link active"
                                                    id="music" data-bs-toggle="tab" data-bs-target="#music_pane"
                                                    type="button" role="tab" aria-controls="music_pane"
                                                    aria-selected="true">Select Artist</button></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="add_music_content">
                                      <!-- add music pane -->
                                        <div class="tab-pane fade show active" id="music_pane" role="tabpanel"
                                            aria-labelledby="music" tabindex="0">
                                            <form id="add-music-form" action="javascript:void(0);" class="row"  method="post" enctype="multipart/form-data">



                                                <div class="col-12 mb-4"><select class="form-select" name="artist" id="cars"
                                                        placeholder="Artist">
                                                        <option selected="selected" disabled="disabled" hidden>Select
                                                            Artist</option>
                                                        <?php
                                                                $con=mysqli_connect("localhost","root","","music");
                                                                $q="select * from artist";
                                                                $r=mysqli_query($con,$q);
                                                                $i=1;

                                                                while($row=mysqli_fetch_array($r)){
                                                                    echo"<option value=",$row['artistid'],">",$row['artist'],"</option>";
                                                                  }
                                                          ?>

                                                        </select></div>

                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button  type="submit" onclick="selectartist()" class="btn btn-primary" name="sub" style="min-width: 140px;">Select Artist</button>
                                         <button
                                        class="btn btn-outline-secondary">Cancel</button></div>

                            </div>
                            </form>
                            <!-- end music panel -->



                        </div>
                    </div>
                </div>
            </div>
						<div class="under-hero container">
                <div class="section">
                    <div class="row">
                        <div class="col-xl-7 col-md-10 mx-auto">

                          <!-- the add music card -->
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="mat-tabs">
                                        <ul class="nav nav-tabs" id="add_music" role="tablist">
                                            <li class="nav-item" role="presentation"><button class="nav-link active"
                                                    id="music" data-bs-toggle="tab" data-bs-target="#music_pane"
                                                    type="button" role="tab" aria-controls="music_pane"
                                                    aria-selected="true">Add Artist</button></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="add_music_content">
                                      <!-- add music pane -->
                                        <div class="tab-pane fade show active" id="music_pane" role="tabpanel"
                                            aria-labelledby="music" tabindex="0">
                                            <form id="add-music" action="javascript:void(0);" class="row"  method="POST" enctype="multipart/form-data">



                                            
																												
                                               
                                                <div class="col-12 mb-4"><input type="text" class="form-control validate" id="p1" name="name" onKeyUp="checkAvailability()"
                                                        placeholder="Enter Name"></div>
                                                        <span id="user-availability-status" ></span>

                                                
                                                
                                                <div class="col-12 mb-4"><label for="song_file_1"
                                                      class="form-label">Artist Image</label> <input type="file" id="file" name="file" accept="image/jpg, image/jpeg, image/png"
                                                       class="form-control validate"></div>
                                                

                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-center">
                                    <button  type="submit" onclick="addartist()" class="btn btn-primary" name="submit" style="min-width: 140px;">Add Artist</button>
                                         <button
                                        class="btn btn-outline-secondary">Cancel</button></div>

                            </div>
                            </form>
                            <!-- end music panel -->
                            <script>
												function selectartist() {
                                                    $("#loaderIcon").show();
                                                    jQuery.ajax({
                                                        url: "phpexec/selectartist.php",
                                                        data: 'artist=' + $("#cars").val(),
                                                        type: "POST",
                                                        success: function(data) {
                                                        $("#user-availability-status").html(data);
                                                        },
                                                        error: function() {}
                                                    });
                                                    }
                                                function checkAvailability() {
                                                        $("#loaderIcon").show();
                                                        jQuery.ajax({
                                                            url: "phpexec/artavail.php",
                                                            data: 'uname=' + $("#p1").val(),
                                                            type: "POST",
                                                            success: function(data) {
                                                                $("#user-availability-status").html(data);
                                                            },
                                                            error: function() {}
                                                    });
                                                   }
                                            
                                            function addartist() {
                                                $("#loaderIcon").show();                                                   
                                                var formData = new FormData($("#add-music")[0]);
                                                    jQuery.ajax({
                                                        url: "phpexec/addartist.php",
                                                        data: formData,
                                                        type: "POST",
                                                        contentType: false,
                                                        processData: false,
                                                        success: function(data) {
                                                            $("#user-availability-status").html(data);
                                                        },
                                                        error: function() {}
                                                    });
                                                }                                            
											</script>


                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <div id="player">
         <div class="container">
					 <?php
						 include 'components/musicbar.php';
						?>
         </div>
      </div>
    <!-- <div id="backdrop"></div> -->
    <script src="js/plugins.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
</body>

</html>
