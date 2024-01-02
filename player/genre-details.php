<?php
		session_start();
		$idd = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","","music");
		$q="select * from reg where loginid ='$idd'";
		$re=mysqli_query($con,$q);
		$row=mysqli_fetch_array($re);
?>
<?php
$x=$_GET['id'];
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    @media (min-width:576px) {
        .cover.cover--round .cover__head:before {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
            height: 89px;
        }

        .cover.cover--round .cover__image img {
            border-radius: 1rem;
            height: 199px;
        }

        .cover.cover--round .cover__image .cover__image__content {
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem
        }
    }
    </style>
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
                         <li class="nav-item"><a href="genres.php" class="nav-link d-flex align-items-center active"><i class="ri-disc-line fs-5"></i> <span class="ps-3">Genres</span></a></li>
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
        <?php
					include 'components/navbar.php';
				 ?>
        <main id="page_content">
            <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>
            <div class="under-hero container">
							<?php
											$con=mysqli_connect("localhost","root","","music");
											$q="select * from cat where catid = '$x'";
											$r=mysqli_query($con,$q);
											$i=1;
											$rowcountb=mysqli_num_rows($r);
											while($row=mysqli_fetch_array($r)){


												?>
								<div class="section">
										<div class="row align-items-center">
												<div class="col-xl-3 col-md-4">
														<div class="cover cover--round">
																<div class="cover__image"><img
                                        src="images/background/horizontal/1.jpg" alt="Remix"></div>
														</div>
												</div>
												<div class="col-1 d-none d-xl-block"></div>
												<div class="col-md-8 mt-5 mt-md-0">
														<div class="d-flex flex-wrap mb-2"><span class="text-dark fs-4 fw-semi-bold pe-2"><?php echo $row['cat'] ?></span>

														</div>
														<ul class="info-list info-list--dotted mb-3">
																<li>Genre</li>
																<?php
																$qa="select * from music where catid = '$x'";
																$ra=mysqli_query($con,$qa);
																$rowcountb=mysqli_num_rows($ra);
																?>
																<li><?php echo $rowcountb; ?> Songs</li>
														</ul>

														<ul class="info-list">
																<li>
																		<div class="d-flex align-items-center"><button type="button" id="play_all"
																						class="btn btn-icon btn-primary rounded-pill" data-collection-play-id="1"><i
																								class="ri-play-fill icon-play"></i> <i
																								class="ri-pause-fill icon-pause"></i></button> <label for="play_all"
																						class="ps-2 fw-semi-bold text-primary mb-0" style="cursor: pointer;">Play
																						all</label></div>
																</li>
														</ul>
												</div>
										</div>
								</div>
								<?php
								}
								?>
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Remix</h3>
                    </div>
                    <div class="list">
											<?php
														$con=mysqli_connect("localhost","root","","music");
														$qq="select COUNT(*) as 'count' from music where catid = '$x'";
														$ra=mysqli_query($con,$qq);
														$rowcount=mysqli_fetch_array($ra);
														if($rowcount['count']==0){
															echo "<h4 align='center'> No Songs Added </h4>";

														 }
														 ?>
                        <div class="row" data-collection-song-id="1">
                            <div class="col-xl-6">


															<?php
																		$con=mysqli_connect("localhost","root","","music");


																			$q="select * from music where catid = '$x'";
																			$r=mysqli_query($con,$q);
																			$i=1;
																			while($row=mysqli_fetch_array($r)){

																				$a=$row['musicid'];
																				?>
																				<div class="list__item" data-song-id=" <?php echo $row['musicid']; ?>" data-song-name="<?php echo $row['title'];  ?>"
																					<?php
																					$id=$row["artistid"];
																					$qq="select * from artist where artistid = '$id'";
																					$rr=mysqli_query($con,$qq);
																					$ro=mysqli_fetch_array($rr);
																					 ?>
																						data-song-artist="<?php echo $ro['artist'] ?>"
																						<?php
																						$id=$row["albumid"];
																						$qq="select * from album where albumid = '$id'";
																						$rr=mysqli_query($con,$qq);
																						$ro=mysqli_fetch_array($rr);
																						 ?>
																							data-song-album="<?php echo $ro['album'] ?>"
																						data-song-url="uploadssong/<?php echo $row['musicfile'] ?>"
																						 data-song-cover="uploadsing/<?php echo $row['art'] ?>">
																		<div class="list__cover"><img src="uploadsing/<?php echo $row['art'] ?>" >
																				<a href="javascript:void(0);"
																						class="btn btn-play btn-sm btn-default btn-icon rounded-pill"
																						data-play-id="1" aria-label="Play pause"><i
																								class="ri-play-fill icon-play"></i> <i
																								class="ri-pause-fill icon-pause"></i></a></div>
																		<div class="list__content"><?php echo "<a href='song-details.php?id=$a' class='list__title text-truncate'>"?><?php echo $row['title'] ?> </a>
																			<?php
																			$id=$row["artistid"];
																			$qq="select * from artist where artistid = '$id'";
																			$rr=mysqli_query($con,$qq);
																			$ro=mysqli_fetch_array($rr);
																			 ?>
																				<p class="list__subtitle text-truncate"><a href="artist-details.php"><?php echo $ro['artist'] ?></a></p>
																		</div>
																		<ul class="list__option">
																				<li><a href="javascript:void(0);" role="button" class="d-inline-flex"
																								aria-label="Favorite" data-favorite-id="1"><i
																										class="ri-heart-line heart-empty"></i> <i
																										class="ri-heart-fill heart-fill"></i></a></li>
																				<li><?php echo $row['duration'] ?></li>
																				<li class="dropstart d-inline-flex"><a class="dropdown-link"
																								href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
																								aria-label="Cover options" aria-expanded="false"><i
																										class="ri-more-fill"></i></a>
																						<ul class="dropdown-menu dropdown-menu-sm">
																								<li><a class="dropdown-item" href="javascript:void(0);" role="button"
																												data-playlist-id="1">Add to playlist</a></li>
																								<li><a class="dropdown-item" href="javascript:void(0);" role="button"
																												data-queue-id="1">Add to queue</a></li>
																								<li><a class="dropdown-item" href="javascript:void(0);" role="button"
																												data-next-id="1">Next to play</a></li>
																								<!-- <li><a class="dropdown-item" href="javascript:void(0);"
																												role="button">Share</a></li> -->
																								<li class="dropdown-divider"></li>
																								<li><a class="dropdown-item" href="javascript:void(0);" role="button"
																												data-play-id="1">Play</a></li>
																						</ul>
																				</li>
																		</ul>
																</div>
																<?php
																}
																?>


                            </div>
                            <!-- <div class="col-xl-6">
                                <div class="list__item" data-song-id="10" data-song-name="Nothing like your eyes"
                                    data-song-artist="Nutty Nina" data-song-album="Lover soul"
                                    data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/10.jpg">
                                    <div class="list__cover"><img src="images/cover/small/10.jpg"
                                            alt="Nothing like your eyes"> <a href="javascript:void(0);"
                                            class="btn btn-play btn-sm btn-default btn-icon rounded-pill"
                                            data-play-id="10" aria-label="Play pause"><i
                                                class="ri-play-fill icon-play"></i> <i
                                                class="ri-pause-fill icon-pause"></i></a></div>
                                    <div class="list__content"><a href="song-details.php"
                                            class="list__title text-truncate">Nothing like your eyes</a>
                                        <p class="list__subtitle text-truncate"><a href="artist-details.php">Nutty
                                                Nina</a></p>
                                    </div>
                                    <ul class="list__option">
                                        <li><a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                aria-label="Favorite" data-favorite-id="10"><i
                                                    class="ri-heart-line heart-empty"></i> <i
                                                    class="ri-heart-fill heart-fill"></i></a></li>
                                        <li>03:24</li>
                                        <li class="dropstart d-inline-flex"><a class="dropdown-link"
                                                href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                                aria-label="Cover options" aria-expanded="false"><i
                                                    class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                        data-playlist-id="10">Add to playlist</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                        data-queue-id="10">Add to queue</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                        data-next-id="10">Next to play</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                        role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                        data-play-id="10">Play</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="mt-5 text-center"><a href="javascript:void(0);" class="btn btn-primary">
                            <div class="btn__wrap"><i class="ri-loader-3-fill"></i> <span>Load more</span></div>
                        </a></div> -->
                </div>
								<div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Discover <span class="text-primary">Genres</span></h3>
                    </div>
                    <div class="row g-4">

											<?php
															$con=mysqli_connect("localhost","root","","music");
															$q="select * from cat";
															$r=mysqli_query($con,$q);
															$i=1;
															while($row=mysqli_fetch_array($r)){

																$a=$row['catid'];
																?>
                        <div class="col-xl-3 col-sm-6">
                            <div class="cover cover--round">
															  <?php echo "<a href='genre-details.php?id=$a' class='cover__image'>"?><img
                                        src="images/background/horizontal/1.jpg" alt="Remix">
                                    <div class="cover__image__content"><span
                                            class="cover__title mb-1 fs-6 text-truncate"><?php echo $row['cat'] ?></span></div>
                                </a></div>
                        </div>
												<?php
												}
												?>

                        <!-- <div class="col-xl-3 col-sm-6">
                            <div class="cover cover--round"><a href="genre-details.php" class="cover__image"><img
                                        src="images/background/horizontal/2.jpg" alt="Rock">
                                    <div class="cover__image__content"><span
                                            class="cover__title mb-1 fs-6 text-truncate">Rock</span></div>
                                </a></div>
                        </div> -->




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
