
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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
      <!-- JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
   </head>

   <body>
      <!-- music player bar -->

            <div class="player-container">
               <div class="player-progress"><progress class="amplitude-buffered-progress player-progress__bar" value="0"></progress><progress class="amplitude-song-played-progress player-progress__bar"></progress><input type="range" class="amplitude-song-slider player-progress__slider" aria-label="Progress slider"></div>
               <div class="cover d-flex align-items-center">
                  <div class="cover__image"><img data-amplitude-song-info="cover_art_url" src="images/cover/small/1.jpg" alt=""></div>
                  <div class="cover__content ps-3 d-none d-sm-block"><a href="song-details.php" class="cover__title text-truncate" data-amplitude-song-info="name"></a> <a href="artist-details.php" class="cover__subtitle text-truncate" data-amplitude-song-info="artist"></a></div>
               </div>
               <div class="player-control"><button type="button" class="amplitude-repeat btn btn-icon me-4 d-none d-md-block" aria-label="Repeat"><i class="ri-repeat-2-fill fs-5"></i></button> <button type="button" class="amplitude-prev btn btn-icon" aria-label="Backward"><i class="ri-skip-back-mini-fill"></i></button>
                 <button type="button" class="amplitude-play-pause btn btn-icon btn-default rounded-pill" aria-label="Play pause">
                   <i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button>
                   <button type="button" class="amplitude-next btn btn-icon" aria-label="Forward"><i class="ri-skip-forward-mini-fill"></i></button>
                   <button type="button" class="amplitude-shuffle amplitude-shuffle-off btn btn-icon ms-4 d-none d-md-block" aria-label="Shuffle"><i class="ri-shuffle-fill fs-5"></i></button>
                 </div>
               <div class="player-info">
                  <div class="me-4 d-none d-xl-block"><span class="amplitude-current-minutes"></span>:<span class="amplitude-current-seconds"></span> / <span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span></div>
                  <div class="player-volume dropdown d-none d-md-block">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Volume" aria-expanded="false"><i class="ri-volume-mute-fill fs-5 d-none"></i> <i class="ri-volume-down-fill fs-5"></i> <i class="ri-volume-up-fill fs-5 d-none"></i></button>
                     <div class="dropdown-menu prevent-click"><input type="range" class="amplitude-volume-slider" value="50" min="0" max="100" aria-label="Volume slider"></div>
                  </div>
                  <div class="dropstart d-none d-md-block">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" aria-label="Song options" aria-expanded="false"><i class="ri-more-2-fill fs-5"></i></button>
                     <ul class="dropdown-menu dropdown-menu-sm" id="player_options">
                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                        <li><a class="dropdown-item" href="audio/ringtone-2.mp3" download>Download</a></li>

                        <li><a class="dropdown-item" href="song-details.php">View details</a></li>
                     </ul>
                  </div>
                  <div class="playlist dropstart me-3">
                     <button class="btn btn-icon" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Playlist" aria-expanded="false"><i class="ri-play-list-fill fs-5"></i></button>
                     <div class="dropdown-menu playlist__dropdown">
                        <div class="playlist__head d-flex align-items-center justify-content-between">
                           <h6 class="mb-0">Next Lineup</h6>
                           <a href="javascript:void(0);" role="button" id="clear_playlist" class="btn btn-link">Clear</a>
                        </div>
                        <div id="playlist" class="list playlist__body" data-scroll="true">
                           <div class="col-sm-8 col-10 mx-auto mt-5 text-center">
                              <i class="ri-music-2-line mb-3"></i>
                              <p>No songs, album or playlist are added on lineup.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

      <!-- end music playerbar -->
      <!-- <div id="backdrop"></div> -->

   </body>
</html>
