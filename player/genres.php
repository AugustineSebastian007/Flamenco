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
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/genres.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Mar 2023 04:20:31 GMT -->

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
                        <li class="nav-item"><a href="home.php" class="nav-link d-flex align-items-center"><i
                                    class="ri-home-4-line fs-5"></i> <span class="ps-3">Home</span></a></li>
                        <li class="nav-item"><a href="genres.php" class="nav-link d-flex align-items-center active"><i
                                    class="ri-disc-line fs-5"></i> <span class="ps-3">Genres</span></a></li>
                        <li class="nav-item"><a href="music.php" class="nav-link d-flex align-items-center"><i
                                    class="ri-music-2-line fs-5"></i> <span class="ps-3">Music</span></a></li>
                        <li class="nav-item"><a href="albums.php" class="nav-link d-flex align-items-center"><i
                                    class="ri-album-line fs-5"></i> <span class="ps-3">Albums</span></a></li>
                        <li class="nav-item"><a href="artists.php" class="nav-link d-flex align-items-center"><i
                                    class="ri-mic-line fs-5"></i> <span class="ps-3">Artists</span></a></li>
                        <li class="nav-item nav-item--head"><span class="nav-item--head__text">Music</span> <span
                                class="nav-item--head__dots">...</span></li>
                        <li class="nav-item"><a href="favorites.php" class="nav-link d-flex align-items-center"><i
                                    class="ri-heart-line fs-5"></i> <span class="ps-3">Favorites</span></a></li>

                    </ul>
                </nav>
            </div>
						<div class="sidebar-foot"><a href="add-playlist.php" class="btn btn-primary d-flex">
                    <div class="btn__wrap"><i class="ri-music-fill"></i> <span>Add Playlist</span></div>
                </a></div>
        </aside>
        <?php
					include 'components/navbar.php';
				 ?>
        <main id="page_content">
            <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>
            <div class="under-hero container">
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Music <span class="text-primary">Genres</span></h3>
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
								<div class="section">
                    <!-- <div class="section__head align-items-center"><span class="d-block pe-3 fs-6 fw-semi-bold">10245
                            Albums in the list</span>
                        <div><select class="form-select" aria-label="Filter album">
                                <option value="Popular">Popular</option>
                                <option value="Most loved">Most loved</option>
                                <option value="A to Z">A to Z</option>
                                <option value="Z to A">Z to A</option>
                            </select></div>
                    </div> -->
                    <div class="list list--lg">
                        <div class="row">

													<div class="section__head">
			                        <h3 class="mb-0">Personal <span class="text-primary">Playlist</span></h3>
			                    </div>
                            <div class="col-xl-6">



                              <?php
                                      $con=mysqli_connect("localhost","root","","music");
                                      $q="select * from playdetail where loginid ='$idd' ";
                                      $r=mysqli_query($con,$q);
                                      $i=1;
                                      while($row=mysqli_fetch_array($r)){

                                        $a=$row['playid'];
                                        ?>
                                <div class="list__item">

                                    <?php echo "<a href='playlist-details.php?id=$a' class='list__cover'>"?>
																			<img
			                                        src="images/background/horizontal/1.jpg" alt="Remix"></a>
                                    <div class="list__content">
                                            <?php echo "<a href='playlist-details.php?id=$a' class='list__title text-truncate'>"?>
                                            <?php echo $row['playname'] ?></a>
                                        <p class="list__subtitle text-truncate"><?php echo "<a href='playlist-details.php?id=$a'>"?><?php echo $row['playname'] ?></a></p>
                                    </div>
                                    <ul class="list__option">

                                        <li class="dropstart d-inline-flex"><a class="dropdown-link"
                                                href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                                aria-label="Cover options" aria-expanded="false"><i
                                                    class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-sm">

                                                <li><a class="dropdown-item" href="audio/ringtone-1.mp3"
                                                        download>Download</a></li>

                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <?php echo "<a href='album-details.php?id=$a' class='dropdown-item'>"?>
                                                  View details</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                                }
                                ?>








                            </div>


                            <!-- <div class="col-xl-6">
                                <div class="list__item"><a href="album-details.php" class="list__cover"><img
                                            src="images/cover/small/6.jpg" alt="Find soul"></a>
                                    <div class="list__content"><a href="album-details.php"
                                            class="list__title text-truncate">Find soul</a>
                                        <p class="list__subtitle text-truncate"><a href="artist-details.php">Rasomi
                                                Pelina</a></p>
                                    </div>
                                    <ul class="list__option">
                                        <li><span class="badge rounded-pill bg-info"><i
                                                    class="ri-vip-crown-fill"></i></span></li>
                                        <li><a href="javascript:void(0);" role="button" class="d-inline-flex"
                                                aria-label="Favorite" data-favorite-id="105"><i
                                                    class="ri-heart-line heart-empty"></i> <i
                                                    class="ri-heart-fill heart-fill"></i></a></li>
                                        <li class="dropstart d-inline-flex"><a class="dropdown-link"
                                                href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                                aria-label="Cover options" aria-expanded="false"><i
                                                    class="ri-more-fill"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                        data-favorite-id="105">Favorite</a></li>
                                                <li><a class="dropdown-item" href="audio/ringtone-6.mp3"
                                                        download>Download</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);"
                                                        role="button">Share</a></li>
                                                <li class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="album-details.php">View details</a>
                                                </li>
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
