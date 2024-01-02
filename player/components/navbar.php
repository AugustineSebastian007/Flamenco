
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="description" content="Listen App - Online Music Streaming App Template">
      <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
      <title>Listen App - Online Music Streaming App</title>
      <link href="images/logos/favicon.png" rel="icon">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="apple-touch-icon" href="images/logos/touch-icon-iphone.png">
      <link rel="apple-touch-icon" sizes="152x152" href="images/logos/touch-icon-ipad.png">
      <link rel="apple-touch-icon" sizes="180x180" href="images/logos/touch-icon-iphone-retina.png">
      <link rel="apple-touch-icon" sizes="167x167" href="images/logos/touch-icon-ipad-retina.png">
      <link href="css/plugins.bundle.css" rel="stylesheet" type="text/css">
      <link href="css/styles.bundle.css" rel="stylesheet" type="text/css">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

   </head>
   <body>
				 <!-- searchbar -->
 				<header id="header">
            <div class="container">
                <div class="header-container">
                    <div class="d-flex align-items-center"><a href="javascript:void(0);" role="button"
                            class="header-text sidebar-toggler d-lg-none me-3" aria-label="Sidebar toggler"><i
                                class="ri-menu-3-line"></i></a>

                        <form action="#" id="search_form" class="me-3"><label for="search_input"><i
                                    class="ri-search-2-line"></i></label> <input type="text"
                                placeholder="Type anything to get result..." id="search_input"
                                class="form-control form-control-sm" name="search" onkeyup="search_animal()"></form>


																<script>
																		function search_animal() {
																			let input = document.getElementById('search_input').value
																			input=input.toLowerCase();
																			let x = document.getElementsByClassName('animals');

																			for (i = 0; i < x.length; i++) {
																					if (!x[i].innerHTML.toLowerCase().includes(input)) {
																							x[i].style.display="none";
																					}
																					else {
																							x[i].style.display="list-item";
																					}
																			}
																		}
																</script>


                         <div id="search_results" class="search pb-3">
                            <!-- <div class="search__head">
                                <div class="search__head__filter">
																	<button
	                                        type="button" class="btn btn-sm btn-light-primary ">All</button>
																	<button
                                        type="button" class="btn btn-sm btn-light-primary ">Artists</button> <button
                                        type="button" class="btn btn-sm btn-light-primary">Songs</button> <button
                                        type="button" class="btn btn-sm btn-light-primary">Albums</button></div>
                            </div> -->
                            <div class="search__body" data-scroll="true">
                                <div class="mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-3"> </div>
                                    <div class="row g-4 list" >

																			<?php
				                                      $con=mysqli_connect("localhost","root","","music");
				                                      $q="select * from artist";
				                                      $r=mysqli_query($con,$q);
				                                      $i=1;
				                                      while($rr=mysqli_fetch_array($r)){

				                                        $a=$rr['artistid'];
				                                        ?>
                                        <div class="col-xl-3 col-md-4 col-sm-6 animals" >
                                            <div class="list__item">
																							<?php echo "<a href='artist-details.php?id=$a' class='list__cover'>"?>
																							<img src="../material-dashboard-master/pages/uploads/<?php echo $rr['img'] ?>"
                                                        ></a>
                                                <div class="list__content">
																									<?php echo "<a href='artist-details.php?id=$a' class='list__title text-truncate'>"?>
																									<?php echo $rr['artist'] ?></a></div>
                                            </div>
                                        </div>
																				<?php
				                                }
				                                ?>

																				<?php
					                                      $con=mysqli_connect("localhost","root","","music");
					                                      $q="select * from music";
					                                      $r=mysqli_query($con,$q);
					                                      $i=1;
					                                      while($rr=mysqli_fetch_array($r)){

					                                        $a=$rr['musicid'];
					                                        ?>
	                                        <div class="col-xl-3 col-md-4 col-sm-6 animals">
	                                            <div class="list__item ">
																								<?php echo "<a href='song-details.php?id=$a' class='list__cover'>"?>
																								<img src="uploadsing/<?php echo $rr['art'] ?>"
	                                                        ></a>
	                                                <div class="list__content ">
																										<?php echo "<a href='song-details.php?id=$a' class='list__title text-truncate'>"?>
																										<?php echo $rr['title'] ?></a></div>
	                                            </div>
	                                        </div>
																					<?php
					                                }
					                                ?>
																					<?php
						                                      $con=mysqli_connect("localhost","root","","music");
						                                      $q="select * from album";
						                                      $r=mysqli_query($con,$q);
						                                      $i=1;
						                                      while($rr=mysqli_fetch_array($r)){

						                                        $a=$rr['albumid'];
						                                        ?>
		                                        <div class="col-xl-3 col-md-4 col-sm-6 animals">
		                                            <div class="list__item">
																									<?php echo "<a href='album-details.php?id=$a' class='list__cover'>"?>
																									<img src="../material-dashboard-master/pages/uploads/<?php echo $rr['img'] ?>"
		                                                        ></a>
		                                                <div class="list__content">
																											<?php echo "<a href='album-details.php?id=$a' class='list__title text-truncate'>"?>
																											<?php echo $rr['album'] ?></a></div>
		                                            </div>
		                                        </div>
																						<?php
						                                }
						                                ?>
                                    </div>
                                </div>


                            </div>
                        </div>



                        <div class="d-flex align-items-center">
                            <!-- <div class="dropdown"><a href="javascript:void(0);"
                                    class="header-text d-flex align-items-center" role="button" id="language_menu"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i
                                        class="ri-earth-line fs-5"></i> <span
                                        class="d-none d-md-block ms-1">Language</span></a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                    aria-labelledby="language_menu">
                                    <div class="py-2 px-4"><span class="d-block fw-bold">What music do you like?</span>
                                        <p>Select languages you want to listen.</p>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="d-flex flex-wrap py-2">
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_1"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_1">Hindi</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_2"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_2">Punjabi</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_3"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_3">Tamil</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_4"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_4">Bengali</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_5"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_5">Kannada</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_6"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_6">Gujarati</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_7"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_7">Urdu</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_8"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_8">English</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_9"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_9">Telugu</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_10"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_10">Bhojpuri</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_11"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_11">Malayalam</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_12"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_12">Marathi</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_13"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_13">Haryanvi</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_14"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_14">Rajasthani</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_15"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_15">Assamese</label></div>
                                        </div>
                                        <div class="py-2 px-4 w-50">
                                            <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                    id="lang_16"> <label class="form-check-label fw-semi-bold"
                                                    for="lang_16">Odia</label></div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="py-2 px-4"><button type="button"
                                            class="btn btn-primary w-100 justify-content-center">Update</button></div>
                                </div>
                            </div> -->


                            <div class="dropdown ms-3 ms-sm-4"><a href="javascript:void(0);" class="avatar header-text"
                                    role="button" id="user_menu" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div><span
                                    <span class="ps-2 d-none d-sm-block"><?php echo $row['name'] ; ?></span>
                                 </a>
                                 <ul class="dropdown-menu dropdown-menu-md dropdown-menu-end" aria-labelledby="user_menu">
                                    <li>
                                       <div class="py-2 px-3 avatar avatar--lg">
                                          <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div>
                                          <div class="avatar__content"><span class="avatar__title"><?php echo $row['name'] ; ?></span> 
                                          <span class="avatar__subtitle"><?php

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
                                                        ?></span>
                                        </div>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex align-items-center" href="profile.php"><i
                                                class="ri-user-3-line fs-5"></i> <span class="ps-2">Profile</span></a>
                                    </li>
                                    <!-- <li><a class="dropdown-item d-flex align-items-center" href="favorites.php"><i
                                                class="ri-heart-line fs-5"></i> <span class="ps-2">Favorites</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                                                class="ri-settings-line fs-5"></i> <span
                                                class="ps-2">Settings</span></a></li>-->
                                    <li><a class="dropdown-item d-flex align-items-center" href="plan.php"><i
                                                class="ri-money-dollar-circle-line fs-5"></i> <span
                                                class="ps-2">Plan</span></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex align-items-center external text-danger"
                                            href="logout.php"><i class="ri-logout-circle-line fs-5"></i> <span
                                                class="ps-2">Logout</span></a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </header>
         <!-- end searchbar -->

      <!-- <div id="backdrop"></div> -->
        <script src="js-copy/plugins.bundle.js"></script>
        <script src="js-copy/scripts.bundle.js"></script>
   </body>
</html>
