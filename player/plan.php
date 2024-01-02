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
           <div class="hero" style="background-image: url(images/banner/event.jpg);"></div>
           <div class="under-hero container">
               <div class="section">
                   <div class="plan bg-light">
                       <div class="card plan__info overflow-hidden">
                           <div class="card-body d-flex flex-column p-0">
                               <div class="p-4">
                                   <h4 class="mb-3">Your <span class="text-primary">Subscription</span></h4>
                                   <p class="fs-6">Your <b>Account Plan</b> Can be selected,
                                       kindly select your plan.</p>
                               </div>
                               <div class="px-3 text-center mt-auto"><img src="images/misc/plan.png" class="img-fluid"
                                       alt=""></div>
                           </div>
                       </div>
                       <div class="plan__data">
                           <div class="card plan__col">
                               <div class="card-body fw-medium">
                                   <div class="d-flex align-items-center text-dark mb-4"><i
                                           class="ri-music-2-line fs-3"></i>
                                       <h4 class="mb-0 ps-3">Normal <span class="text-primary">free</span></h4>
                                   </div>
                                   <p class="fs-6 opacity-50">What you'll get</p>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">Access all free tracks and app features</span></div>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">No Ads between tracks</span></div>
                               </div>
                               <div class="card-footer pb-4 pb-sm-0">
                                   <div class="text-dark mb-3"><span class="fs-4 fw-bold">$0.00</span>/year</div>
                                   <button type="button" class="btn btn-primary w-100" disabled>Active</button>
                               </div>
                           </div>
                           <div class="card plan__col">
                               <div class="card-body fw-medium">
                                   <div class="d-flex align-items-center text-dark mb-4"><i
                                           class="ri-vip-crown-line fs-3"></i>
                                       <h4 class="mb-0 ps-3">Premium</h4>
                                   </div>
                                   <p class="fs-6 opacity-50">What you'll get</p>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">Access all free tracks and app features</span></div>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">No Ads between tracks</span></div>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">Create playlist & access analytics</span></div>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">Listen paid track once & purchase</span></div>
                                   <div class="d-flex mb-3"><i
                                           class="ri-checkbox-circle-fill text-primary opacity-75 fs-6"></i> <span
                                           class="ps-2">Download and listen offline</span></div>
                               </div>
                               <div class="card-footer">
                                   <div class="text-dark mb-3"><span class="fs-4 fw-bold">₹1800</span>/year</div>

																	 <form action="pay2.php" method='POST' target="_blank">
                                   <input type='submit' value='Choose' name='payit' class='btn btn-primary w-100    ' >
																	 <td><input type="hidden" name='roonum' value='<?php echo $idd ?>'></td>
		                                <td><input type="hidden" name='mname' value='Mr. <?php echo $row['name'] ; ?>'></td>
		                                <td><input type="hidden" name='amt' value='1800'></td>

                                </form>
                               </div>
                           </div>
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
    <div id="backdrop"></div>
    <script src="js/plugins.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
</body>

</html>
