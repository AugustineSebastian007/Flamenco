
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="description" content="Listen App - Online Music Streaming App Template">
      <meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
      <title>Listen App - Online Music Streaming App</title>
      <link href="../images/logos/favicon.png" rel="icon">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link rel="apple-touch-icon" href="../images/logos/touch-icon-iphone.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../images/logos/touch-icon-ipad.png">
      <link rel="apple-touch-icon" sizes="180x180" href="../images/logos/touch-icon-iphone-retina.png">
      <link rel="apple-touch-icon" sizes="167x167" href="../images/logos/touch-icon-ipad-retina.png">
      <link href="../css/plugins.bundle.css" rel="stylesheet" type="text/css">
      <link href="../css/styles.bundle.css" rel="stylesheet" type="text/css">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

			<!-- CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
      <!-- JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>

         <!-- sidebar -->
         <aside id="sidebar">
            <div class="sidebar-head d-flex align-items-center justify-content-between">
               <a href="../home.php" class="brand external">
               <img src="../images/logos/logo.png" alt="Listen app"> </a>
               <a href="javascript:void(0);" role="button" class="sidebar-toggler" aria-label="Sidebar toggler">
                  <div class="d-none d-lg-block"><i class="ri-menu-3-line sidebar-menu-1"></i>
                     <i class="ri-menu-line sidebar-menu-2"></i>
                  </div>
                  <i class="ri-menu-fold-line d-lg-none"></i>
               </a>
            </div>
            <div class="sidebar-body" data-scroll="true">
               <nav class="navbar d-block p-0">
                  <ul class="navbar-nav">
                     <li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('home.php');" data-filepath="home.php" class="nav-link d-flex align-items-center active"><i class="ri-home-4-line fs-5"></i> <span class="ps-3">Home</span></a></li>
                   	<li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('genres.php');" class="nav-link d-flex align-items-center"><i class="ri-disc-line fs-5"></i> <span class="ps-3">Genres</span></a></li>
                     <li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('music.php');" class="nav-link d-flex align-items-center"><i class="ri-music-2-line fs-5"></i> <span class="ps-3">Music</span></a></li>
                     <li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('albums.php');" class="nav-link d-flex align-items-center"><i class="ri-album-line fs-5"></i> <span class="ps-3">Albums</span></a></li>
                     <li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('artists.php');" class="nav-link d-flex align-items-center"><i class="ri-mic-line fs-5"></i> <span class="ps-3">Artists</span></a></li>
                     <!-- <li class="nav-item"><a href="stations.html" class="nav-link d-flex align-items-center"><i class="ri-radio-2-line fs-5"></i> <span class="ps-3">Stations</span></a></li> -->
                     <li class="nav-item nav-item--head"><span class="nav-item--head__text">Music</span> <span class="nav-item--head__dots">...</span></li>
                     <li class="nav-item"><a href="#" onmousedown="javascript:swapFileIntoPage('favorites.php');" class="nav-link d-flex align-items-center"><i class="ri-heart-line fs-5"></i> <span class="ps-3">Favorites</span></a></li>
                     <!-- <li class="nav-item"><a href="history.html" class="nav-link d-flex align-items-center"><i class="ri-history-line fs-5"></i> <span class="ps-3">History</span></a></li> -->
                  </ul>
               </nav>
            </div>
            <div class="sidebar-foot"><a href="../add-music.php" class="btn btn-primary d-flex">
                    <div class="btn__wrap"><i class="ri-music-fill"></i> <span>Add Music</span></div>
                </a></div>
         </aside>
         <!-- end sidebar -->

      <!-- <div id="backdrop"></div> -->
        <script src="../js/plugins.bundle.js"></script>
        <script src="../js/scripts.bundle.js"></script>
   </body>
</html>
