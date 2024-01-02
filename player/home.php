<?php
		session_start();
		$idd = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","","music");
		$qq="select * from reg where loginid ='$idd'";
		$ree=mysqli_query($con,$qq);
		$row=mysqli_fetch_array($ree);
?>
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
      <style>
      @media (min-width:576px) {
          .cover.cover--round .cover__head:before {
              border-top-left-radius: 1rem;
              border-top-right-radius: 1rem;
              height: 89px;
          }

          .cover.cover--round .cover__image img {
              border-radius: 1rem;
              height: 239px;
          }
          .cover.cover--round .cover__image .pro {
              border-radius: 1rem;
              height: 289px;
          }

          .cover.cover--round .cover__image .cover__image__content {
              border-bottom-left-radius: 1rem;
              border-bottom-right-radius: 1rem
          }
      }
      </style>

   </head>

   <body>
      <div id="line_loader">
      </div>
      <!-- loading  -->
    
      <!-- end loading -->



      <div id="wrapper">

          <!-- sidebar -->
         <aside id="sidebar">
            <div class="sidebar-head d-flex align-items-center justify-content-between">
               <a href="home.php" class="brand external">
               <img src="images/logos/logo.png" alt="Listen app"> </a>
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
            <div class="sidebar-foot"><a href="add-music.php" class="btn btn-primary d-flex">
                    <div class="btn__wrap"><i class="ri-music-fill"></i> <span>Add Music</span></div>
                </a></div>
         </aside>
         <!-- end sidebar -->
				 <!-- searchbar -->
             <?php
					include 'components/navbar.php';
				 ?>
         <!-- end searchbar -->




         <!-- main content -->
         <main id="page_content">
            <div class="hero" style="background-image: url(images/banner/home.jpg);"></div>
            <div class="under-hero container">

                <!-- top charts -->
               <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">Listen top charts</span>
                        <h3 class="mb-0">Top <span class="text-primary">Charts</span></h3>
                     </div>
                     <a href="music.php" class="btn btn-link">View All</a>
                  </div>
                  <div class="swiper-carousel swiper-carousel-button">
                     <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">
                          <?php
                                  $con=mysqli_connect("localhost","root","","music");
                                  $q="select * from music";
                                  $r=mysqli_query($con,$q);
                                  $i=1;
                                  while($row=mysqli_fetch_array($r)){

                                    $a=$row['musicid'];
                                    ?>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="<?php echo $row['musicid']; ?>" data-song-name="<?php echo $row['title'];  ?>"
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

                                data-song-url="uploadssong/<?php echo $row['musicfile'] ?>" data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                                 <div class="cover__head">
                                     <ul class="cover__label d-flex">
                                    <?php
                                         $qq="select COUNT(*) as 'count' from musicfav where musicid = '$a' and userid ='$idd'";
                                         $ra=mysqli_query($con,$qq);
                                         $rowcount=mysqli_fetch_array($ra);
                                         if($rowcount['count']==1){
                                           echo "<li><span class='badge rounded-pill bg-danger'>";
                                           echo "<i class='ri-heart-fill heart-fill '></i>";
                                           echo "</span> </li>";
                                          }
                                  ?>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="<?php echo $row['musicid']; ?>">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="uploadsing/<?php echo $row['art'] ?>" alt="<?php echo $row['title'];  ?>">
                                   <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="<?php echo $row['musicid']; ?>">
                                     <i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i>
                                   </button>
                                 </div>
                                 <div class="cover__foot">
                                   <?php echo "<a href='song-details.php?id=$a' class='cover__title text-truncate'>"?>
                                    <?php echo $row['title'];  ?></a>
                                    <?php
                                    $id=$row["artistid"];
                                    $qq="select * from artist where artistid = '$id'";
                                    $rr=mysqli_query($con,$qq);
                                    $ro=mysqli_fetch_array($rr);
                                    $b=$row['artistid'];
                                     ?>
                                    <p class="cover__subtitle text-truncate">
                                      <?php echo "<a href='artist-details.php?id=$b'>"?>
                                      <?php echo $ro['artist'] ?></a></p>
                                 </div>
                              </div>
                           </div>
                           <?php
                           }
                           ?>

                        </div>
                     </div>
                     <div class="swiper-button-prev btn-default rounded-pill"></div>
                     <div class="swiper-button-next btn-default rounded-pill"></div>
                  </div>
               </div>

               <!-- end top charts -->

                  <!-- event and trending container -->
               <div class="row">

                  <!-- events -->
                  <div class="section col-xl-6">
                     <div class="section__head">
                        <div class="flex-grow-1">
                           <h3 class="mb-0">Featured  <span class="text-primary">Album</span></h3>
                        </div>
                        <a href="albums.php" class="btn btn-link">Explore More</a>
                     </div>
                     <div class="swiper-carousel">
                        <div class="swiper" data-swiper-slides="2" data-swiper-autoplay="true">
                           <div class="swiper-wrapper">
                             <?php
                                     $con=mysqli_connect("localhost","root","","music");
                                     $q="select * from album";
                                     $r=mysqli_query($con,$q);
                                     $i=1;
                                     while($row=mysqli_fetch_array($r)){

                                       $a=$row['albumid'];
                                       ?>

                               <div class="swiper-slide">
                                   <div class="cover cover--round">
                                       <div class="cover__head">
                                           <ul class="cover__label d-flex">

                                             <?php
                                                  $qq="select COUNT(*) as 'count' from albumfav where albumid = '$a' and userid ='$idd'";
                                                  $ra=mysqli_query($con,$qq);
                                                  $rowcount=mysqli_fetch_array($ra);
                                                  if($rowcount['count']==1){
                                                    echo "<li><span class='badge rounded-pill bg-danger'>";
                                                    echo "<i class='ri-heart-fill heart-fill '></i>";
                                                    echo "</span> </li>";
                                                   }
                                           ?>

                                           </ul>
                                           <div class="cover__options dropstart d-inline-flex ms-auto"><a
                                                   class="dropdown-link" href="javascript:void(0);" role="button"
                                                   data-bs-toggle="dropdown" aria-label="Cover options"
                                                   aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                               <ul class="dropdown-menu dropdown-menu-sm">
                                                   <li><a class="dropdown-item" href="javascript:void(0);"
                                                           role="button" data-favorite-id="100">Favorite</a></li>
                                                   <li><a class="dropdown-item" href="audio/ringtone-1.mp3"
                                                           download>Download</a></li>

                                                   <li class="dropdown-divider"></li>
                                                   <li>
                                                           <?php echo "<a href='album-details.php?id=$a' class='dropdown-item'>"?>View
                                                                 details</a>
                                                         </li>
                                               </ul>
                                           </div>
                                       </div>
                                             <?php echo "<a href='album-details.php?id=$a' class='cover__image'>"?>
                                         <img class="pro"
                                               src="../material-dashboard-master/pages/uploads/<?php echo $row['img'] ?>"></a>
                                       <div class="cover__foot">
                                               <?php echo "<a href='album-details.php?id=$a' class='cover__title text-truncate'>"?>
                                               <?php echo $row['album'] ?></a>
                                            <p class="cover__subtitle text-truncate">
                                                   <?php echo "<a href='album-details.php?id=$a' >"?><?php echo $row['album'] ?></a></p>
                                       </div>
                                   </div>
                               </div>
                               <?php
                               }
                               ?>



                           </div>
                           <div class="swiper-pagination"></div>
                        </div>
                     </div>
                  </div>

                  <!-- end event -->

                  <!-- list songs -->
                  <div class="col-xl-1"></div>
                  <div class="section col-xl-5">
                     <div class="mat-tabs">
                        <ul class="nav nav-tabs" id="songs_list" role="tablist">
                           <li class="nav-item" role="presentation"><button class="nav-link active" id="recent" data-bs-toggle="tab" data-bs-target="#recent_pane" type="button" role="tab" aria-controls="recent_pane" aria-selected="true">Recent</button></li>
                           <li class="nav-item" role="presentation"><button class="nav-link" id="trending" data-bs-toggle="tab" data-bs-target="#trending_pane" type="button" role="tab" aria-controls="trending_pane" aria-selected="false">Trending</button></li>
                           <li class="nav-item" role="presentation"><button class="nav-link" id="international" data-bs-toggle="tab" data-bs-target="#international_pane" type="button" role="tab" aria-controls="international_pane" aria-selected="false">International</button></li>
                        </ul>
                     </div>
                     <div class="tab-content mt-4" id="songs_list_content">
                        <div class="tab-pane fade show active" id="recent_pane" role="tabpanel" aria-labelledby="recent" tabindex="0">
                           <div class="list">

                             <?php
                                     $con=mysqli_connect("localhost","root","","music");
                                     $q="select * from music";
                                     $r=mysqli_query($con,$q);
                                     $i=1;
                                     while($row=mysqli_fetch_array($r)){

                                       $a=$row['musicid'];
                                       ?>

                                       <div class="list__item" data-song-id=" <?php echo $row['musicid']; ?> " data-song-name=" <?php echo $row['title'];  ?> "
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

                                           data-song-url="uploadssong/<?php echo $row['musicfile'] ?>" data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                                 <div class="list__cover"><img src="uploadsing/<?php echo $row['art'] ?>" alt="<?php echo $row['title'] ?> ">
                                   <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></a></div>
                                 <div class="list__content">
                                   <?php echo "<a href='song-details.php?id=$a' class='list__title text-truncate'>"?>
                                    <?php echo $row['title'] ?> </a>
                                    <?php
                                    $id=$row["artistid"];
                                    $qq="select * from artist where artistid = '$id'";
                                    $rr=mysqli_query($con,$qq);
                                    $ro=mysqli_fetch_array($rr);
                                     ?>
                                <p class="list__subtitle text-truncate"><a href="artist-details.php"><?php echo $ro['artist'] ?></a></p>
                                 </div>
                                 <ul class="list__option">
                                    <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                    <?php

                                         $qq="select COUNT(*) as 'count' from musicfav where musicid = '$a' and userid ='$idd'";
                                         $ra=mysqli_query($con,$qq);
                                         $rowcount=mysqli_fetch_array($ra);
                                         if($rowcount['count']==1){

                                           echo "<li><span type='submit' class='btn align-items-center d-inline-flex active' name='fav' aria-label='Favorite' data-favorite-id='1'>";
                                           echo "<i class='ri-heart-line heart-empty '></i>";
                                           echo "<i class='ri-heart-fill heart-fill '></i>";
                                           echo "</span>";
                                          }
                                         elseif($rowcount['count']==0){

                                           echo "<li><span type='submit' class='btn  text-dark  align-items-center' name='favv' >";
                                           echo "<i class='ri-heart-line heart-empty'></i>";
                                           echo "</span>";
                                            }

                                          echo "</form>";



                                  ?>
                                    <li><?php echo $row['duration'] ?></li>
                                    <li class="dropstart d-inline-flex">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>

                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </div>
                              <?php
                              }
                              ?>

                           </div>
                        </div>
                        <div class="tab-pane fade" id="trending_pane" role="tabpanel" aria-labelledby="trending" tabindex="0">
                          <div class="list">

                            <?php
                                    $con=mysqli_connect("localhost","root","","music");
                                    $q="select * from music";
                                    $r=mysqli_query($con,$q);
                                    $i=1;
                                    while($row=mysqli_fetch_array($r)){

                                      $a=$row['musicid'];
                                      ?>

                                      <div class="list__item" data-song-id=" <?php echo $row['musicid']; ?> " data-song-name=" <?php echo $row['title'];  ?> "
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

                                          data-song-url="uploadssong/<?php echo $row['musicfile'] ?>" data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                                <div class="list__cover"><img src="uploadsing/<?php echo $row['art'] ?>" alt="<?php echo $row['title'] ?> ">
                                  <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></a></div>
                                <div class="list__content">
                                  <?php echo "<a href='song-details.php?id=$a' class='list__title text-truncate'>"?>
                                   <?php echo $row['title'] ?> </a>
                                   <?php
                                   $id=$row["artistid"];
                                   $qq="select * from artist where artistid = '$id'";
                                   $rr=mysqli_query($con,$qq);
                                   $ro=mysqli_fetch_array($rr);
                                    ?>
                               <p class="list__subtitle text-truncate"><a href="artist-details.php"><?php echo $ro['artist'] ?></a></p>
                                </div>
                                <ul class="list__option">
                                   <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                   <?php

                                        $qq="select COUNT(*) as 'count' from musicfav where musicid = '$a' and userid ='$idd'";
                                        $ra=mysqli_query($con,$qq);
                                        $rowcount=mysqli_fetch_array($ra);
                                        if($rowcount['count']==1){

                                          echo "<li><span type='submit' class='btn align-items-center d-inline-flex active' name='fav' aria-label='Favorite' data-favorite-id='1'>";
                                          echo "<i class='ri-heart-line heart-empty '></i>";
                                          echo "<i class='ri-heart-fill heart-fill '></i>";
                                          echo "</span>";
                                         }
                                        elseif($rowcount['count']==0){

                                          echo "<li><span type='submit' class='btn  text-dark  align-items-center' name='favv' >";
                                          echo "<i class='ri-heart-line heart-empty'></i>";
                                          echo "</span>";
                                           }





                                 ?>
                                   <li><?php echo $row['duration'] ?></li>
                                   <li class="dropstart d-inline-flex">
                                      <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                      <ul class="dropdown-menu dropdown-menu-sm">
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>

                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                      </ul>
                                   </li>
                                </ul>
                             </div>
                             <?php
                             }
                             ?>

                          </div>
                        </div>
                        <div class="tab-pane fade" id="international_pane" role="tabpanel" aria-labelledby="international" tabindex="0">
                          <div class="list">

                            <?php
                                    $con=mysqli_connect("localhost","root","","music");
                                    $q="select * from music";
                                    $r=mysqli_query($con,$q);
                                    $i=1;
                                    while($row=mysqli_fetch_array($r)){

                                      $a=$row['musicid'];
                                      ?>

                                      <div class="list__item" data-song-id=" <?php echo $row['musicid']; ?> " data-song-name=" <?php echo $row['title'];  ?> "
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

                                          data-song-url="uploadssong/<?php echo $row['musicfile'] ?>" data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                                <div class="list__cover"><img src="uploadsing/<?php echo $row['art'] ?>" alt="<?php echo $row['title'] ?> ">
                                  <a href="javascript:void(0);" class="btn btn-play btn-sm btn-default btn-icon rounded-pill" data-play-id="2" aria-label="Play pause"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></a></div>
                                <div class="list__content">
                                  <?php echo "<a href='song-details.php?id=$a' class='list__title text-truncate'>"?>
                                   <?php echo $row['title'] ?> </a>
                                   <?php
                                   $id=$row["artistid"];
                                   $qq="select * from artist where artistid = '$id'";
                                   $rr=mysqli_query($con,$qq);
                                   $ro=mysqli_fetch_array($rr);
                                    ?>
                               <p class="list__subtitle text-truncate"><a href="artist-details.php"><?php echo $ro['artist'] ?></a></p>
                                </div>
                                <ul class="list__option">
                                   <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                   <?php

                                        $qq="select COUNT(*) as 'count' from musicfav where musicid = '$a' and userid ='$idd'";
                                        $ra=mysqli_query($con,$qq);
                                        $rowcount=mysqli_fetch_array($ra);
                                        if($rowcount['count']==1){

                                          echo "<li><span type='submit' class='btn align-items-center d-inline-flex active' name='fav' aria-label='Favorite' data-favorite-id='1'>";
                                          echo "<i class='ri-heart-line heart-empty '></i>";
                                          echo "<i class='ri-heart-fill heart-fill '></i>";
                                          echo "</span>";
                                         }
                                        elseif($rowcount['count']==0){

                                          echo "<li><span type='submit' class='btn  text-dark  align-items-center' name='favv' >";
                                          echo "<i class='ri-heart-line heart-empty'></i>";
                                          echo "</span>";
                                           }


                                 ?>
                                   <li><?php echo $row['duration'] ?></li>
                                   <li class="dropstart d-inline-flex">
                                      <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                      <ul class="dropdown-menu dropdown-menu-sm">
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="2">Add to playlist</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                         <li class="dropdown-divider"></li>
                                         <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                      </ul>
                                   </li>
                                </ul>
                             </div>
                             <?php
                             }
                             ?>

                          </div>
                        </div>
                     </div>
                  </div>
                  <!-- end song list -->


               </div>
                <!-- end container -->

                <!-- new release container -->
               <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">New to listen</span>
                        <h3 class="mb-0">New <span class="text-primary">Releases</span></h3>
                     </div>
                     <a href="music.php" class="btn btn-link">View All</a>
                  </div>
                  <div class="swiper-carousel swiper-carousel-button">
                     <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">


                          <?php
                                  $con=mysqli_connect("localhost","root","","music");
                                  $q="select * from music";
                                  $r=mysqli_query($con,$q);
                                  $i=1;
                                  while($row=mysqli_fetch_array($r)){

                                    $a=$row['musicid'];
                                    ?>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="<?php echo $row['musicid']; ?>" data-song-name="<?php echo $row['title'];  ?>"
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

                                data-song-url="uploadssong/<?php echo $row['musicfile'] ?>" data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                                 <div class="cover__head">
                                     <ul class="cover__label d-flex">
                                    <?php
                                         $qq="select COUNT(*) as 'count' from musicfav where musicid = '$a' and userid ='$idd'";
                                         $ra=mysqli_query($con,$qq);
                                         $rowcount=mysqli_fetch_array($ra);
                                         if($rowcount['count']==1){
                                           echo "<li><span class='badge rounded-pill bg-danger'>";
                                           echo "<i class='ri-heart-fill heart-fill '></i>";
                                           echo "</span> </li>";
                                          }
                                  ?>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-playlist-id="1">Add to playlist</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="<?php echo $row['musicid']; ?>">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="uploadsing/<?php echo $row['art'] ?>" alt="<?php echo $row['title'];  ?>">
                                   <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="<?php echo $row['musicid']; ?>">
                                     <i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i>
                                   </button>
                                 </div>
                                 <div class="cover__foot">
                                    <a href="song-details.php" class="cover__title text-truncate"><?php echo $row['title'];  ?></a>
                                    <?php
                                    $id=$row["artistid"];
                                    $qq="select * from artist where artistid = '$id'";
                                    $rr=mysqli_query($con,$qq);
                                    $ro=mysqli_fetch_array($rr);
                                     ?>
                                    <p class="cover__subtitle text-truncate"><a href="artist-details.php"><?php echo $ro['artist'] ?></a></p>
                                 </div>
                              </div>
                           </div>
                           <?php
                           }
                           ?>







                        </div>
                     </div>
                     <div class="swiper-button-prev btn-default rounded-pill"></div>
                     <div class="swiper-button-next btn-default rounded-pill"></div>
                  </div>
               </div>
               <!-- end container -->

               <!-- artist container -->
               <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">Best to listen</span>
                        <h3 class="mb-0">Featured <span class="text-primary">Artists</span></h3>
                     </div>
                     <a href="artists.php" class="btn btn-link">View All</a>
                  </div>
                  <div class="swiper-carousel swiper-carousel-button">
                     <div class="swiper" data-swiper-slides="6" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">


                          <?php
                                  $con=mysqli_connect("localhost","root","","music");
                                  $q="select * from artist";
                                  $r=mysqli_query($con,$q);
                                  $i=1;
                                  while($row=mysqli_fetch_array($r)){

                                    $a=$row['artistid'];
                                    ?>
                            <div class="swiper-slide">
                                <div class="avatar avatar--xxl d-block text-center">
                                    <div class="avatar__image">
                                      <?php echo "<a href='artist-details.php?id=$a'>"?>
                                      <img
                                      src="../material-dashboard-master/pages/uploads/<?php echo $row['img'] ?>" ></a></div>
                                      <?php echo "<a href='artist-details.php?id=$a' class='avatar__title mt-3'>"?>
                                      <?php echo $row['artist'] ?></a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>


                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
                <!-- end container -->


                <!-- top album container -->
               <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">Trending to listen</span>
                        <h3 class="mb-0">Top <span class="text-primary">Albums</span></h3>
                     </div>
                     <a href="albums.php" class="btn btn-link">View All</a>
                  </div>
                  <div class="list list--lg list--order">
                     <div class="row">
                        <div class="col-xl-6">

                          <?php
                                  $con=mysqli_connect("localhost","root","","music");
                                  $q="select * from album";
                                  $r=mysqli_query($con,$q);
                                  $i=1;
                                  while($row=mysqli_fetch_array($r)){

                                    $a=$row['albumid'];
                                    ?>
                           <div class="list__item">
                             <?php echo "<a href='album-details.php?id=$a' class='list__cover'>"?>
                              <img src="../material-dashboard-master/pages/uploads/<?php echo $row['img'] ?>"></a>
                              <div class="list__content">
                                <?php echo "<a href='album-details.php?id=$a' class='list__title text-truncate'>"?>
                                                          <?php echo $row['album'] ?></a>
                                 <p class="list__subtitle text-truncate"><?php echo "<a href='album-details.php?id=$a' >"?><?php echo $row['album'] ?></a></p>
                              </div>
                              <ul class="list__option">
                                 <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                 <?php
                                      $qq="select COUNT(*) as 'count' from albumfav where albumid = '$a' and userid ='$idd'";
                                      $ra=mysqli_query($con,$qq);
                                      $rowcount=mysqli_fetch_array($ra);
                                      if($rowcount['count']==1){

                                        echo "<li><span type='submit' class='btn align-items-center d-inline-flex active' name='fav' aria-label='Favorite' data-favorite-id='1'>";
                                        echo "<i class='ri-heart-line heart-empty '></i>";
                                        echo "<i class='ri-heart-fill heart-fill '></i>";
                                        echo "</span>";
                                       }
                                      elseif($rowcount['count']==0){

                                        echo "<li><span type='submit' class='btn  text-dark  align-items-center' name='favv' >";
                                        echo "<i class='ri-heart-line heart-empty'></i>";
                                        echo "</span>";
                                         }
                               ?>
                                 <li class="dropstart d-inline-flex">
                                    <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-fill"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                       <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="100">Favorite</a></li>
                                       <li><a class="dropdown-item" href="audio/ringtone-2.mp3" download>Download</a></li>

                                       <li><?php echo "<a href='album-details.php?id=$a' class='dropdown-item'>"?>View details</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <?php
                           }
                           ?>
                        </div>
                        <div class="col-xl-6">

                        </div>
                     </div>
                  </div>
               </div>
               <!-- end recomendation container -->

               <!-- playlist recomendation container -->
               <!-- <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">Collection to listen</span>
                        <h3 class="mb-0">Best <span class="text-primary">Playlist</span></h3>
                     </div>
                     <a href="albums.php" class="btn btn-link">View All</a>
                  </div>
                  <div class="swiper-carousel">
                     <div class="swiper" data-swiper-slides="4" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/1.jpg" alt="DJ Remix"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">DJ Remix</a> <span class="cover__subtitle">10 Songs | 10 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/2.jpg" alt="Rock Band"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">Rock Band</a> <span class="cover__subtitle">14 Songs | 12 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/3.jpg" alt="Solo Special"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">Solo Special</a> <span class="cover__subtitle">21 Songs | 45 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/4.jpg" alt="Romantic"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">Romantic</a> <span class="cover__subtitle">12 Songs | 75 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/5.jpg" alt="GYM"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">GYM</a> <span class="cover__subtitle">16 Songs | 32 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round">
                                 <div class="cover__image">
                                    <a href="album-details.php"><img src="images/background/horizontal/6.jpg" alt="Retro Special"></a>
                                    <div class="cover__image__content"><a href="album-details.php" class="cover__title mb-1 fs-6 text-truncate">Retro Special</a> <span class="cover__subtitle">34 Songs | 69 Favorites</span></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-prev btn-default rounded-pill"></div>
                     <div class="swiper-button-next btn-default rounded-pill"></div>
                  </div>
               </div> -->
               <!-- end playlist container  -->


               <!-- radio recomendation container -->
               <!-- <div class="section">
                  <div class="section__head">
                     <div class="flex-grow-1">
                        <span class="section__subtitle">Listen live now</span>
                        <h3 class="mb-0">Live <span class="text-primary">Radios</span></h3>
                     </div>
                     <a href="stations.html" class="btn btn-link">View All</a>
                  </div>
                  <div class="swiper-carousel swiper-carousel-button">
                     <div class="swiper" data-swiper-slides="5" data-swiper-autoplay="true">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="1" data-song-name="Kill Bill" data-song-artist="Arebica Luna" data-song-album="Kill Bill" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/1.jpg">
                                 <div class="cover__head">
                                    <ul class="cover__label d-flex">
                                       <li><span class="badge rounded-pill bg-danger"><i class="ri-heart-fill"></i></span></li>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="1">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="1">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="1">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="1">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/1.jpg" alt="International"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="1"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">International</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="2" data-song-name="Happy" data-song-artist="Gerrina Linda" data-song-album="Hot shot" data-song-url="audio/ringtone-2.mp3" data-song-cover="images/cover/small/2.jpg">
                                 <div class="cover__head">
                                    <ul class="cover__label d-flex">
                                       <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="2">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="2">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="2">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="2">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/2.jpg" alt="Network"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="2"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">Network</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="3" data-song-name="Do it your way(Female)" data-song-artist="Zunira Willy & Nutty Nina" data-song-album="Own way" data-song-url="audio/ringtone-3.mp3" data-song-cover="images/cover/small/3.jpg">
                                 <div class="cover__head">
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="3">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="3">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="3">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="3">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/3.jpg" alt="Alpha Gamma"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="3"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">Alpha Gamma</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="4" data-song-name="Say yes" data-song-artist="Johnny Marro" data-song-album="Say yes" data-song-url="audio/ringtone-4.mp3" data-song-cover="images/cover/small/4.jpg">
                                 <div class="cover__head">
                                    <ul class="cover__label d-flex">
                                       <li><span class="badge rounded-pill bg-danger"><i class="ri-heart-fill"></i></span></li>
                                       <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="4">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="4">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="4">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="4">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/4.jpg" alt="Leanne Hutton"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="4"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">Leanne Hutton</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="5" data-song-name="Where is your letter" data-song-artist="Jina Moore & Lenisa Gory" data-song-album="Letter" data-song-url="audio/ringtone-5.mp3" data-song-cover="images/cover/small/5.jpg">
                                 <div class="cover__head">
                                    <ul class="cover__label d-flex">
                                       <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="5">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="5">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="5">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="5">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/5.jpg" alt="K S N F"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="5"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">K S N F</a></div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="cover cover--round" data-song-id="6" data-song-name="Hey not me" data-song-artist="Rasomi Pelina" data-song-album="Find soul" data-song-url="audio/ringtone-6.mp3" data-song-cover="images/cover/small/6.jpg">
                                 <div class="cover__head">
                                    <ul class="cover__label d-flex">
                                       <li><span class="badge rounded-pill bg-info"><i class="ri-vip-crown-fill"></i></span></li>
                                    </ul>
                                    <div class="cover__options dropstart d-inline-flex ms-auto">
                                       <a class="dropdown-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-label="Cover options" aria-expanded="false"><i class="ri-more-2-fill"></i></a>
                                       <ul class="dropdown-menu dropdown-menu-sm">
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-favorite-id="6">Favorite</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-queue-id="6">Add to queue</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-next-id="6">Next to play</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a></li>
                                          <li class="dropdown-divider"></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" role="button" data-play-id="6">Play</a></li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="cover__image"><img src="images/cover/large/6.jpg" alt="Clay Gandy"> <button type="button" class="btn btn-play btn-default btn-icon rounded-pill" data-play-id="6"><i class="ri-play-fill icon-play"></i> <i class="ri-pause-fill icon-pause"></i></button></div>
                                 <div class="cover__foot"><a href="javascript:void(0);" role="button" class="cover__title text-truncate">Clay Gandy</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div> -->
               <!-- end radio recomendation container -->
            </div>
            <!-- end main page content -->

            <!-- footer -->
            <!-- <footer id="footer">
               <div class="container">
                  <div class="text-center mb-4"><a href="mailto:info@listenapp.com" class="display-5 email">info@listenapp.com</a></div>
                  <div class="app-btn-group pt-2">
                     <a href="#" class="btn btn-lg btn-primary">
                        <div class="btn__wrap"><i class="ri-google-play-fill"></i> <span class="ms-2">Google Play</span></div>
                     </a>
                     <a href="#" class="btn btn-lg btn-primary">
                        <div class="btn__wrap"><i class="ri-app-store-fill"></i> <span class="ms-2">App Store</span></div>
                     </a>
                  </div>
               </div>
            </footer> -->
            <!-- end footer -->
         </main>
         <!-- end main -->
      </div>


      <!-- music player bar -->
      <div id="player">
         <div class="container">
					 <?php
						 include 'components/musicbar.php';
						?>
         </div>
      </div>
      <!-- end music playerbar -->
      <!-- <div id="backdrop"></div> -->
        <script src="js/plugins.bundle.js"></script>
        <script src="js/scripts.bundle.js"></script>
   </body>
</html>
