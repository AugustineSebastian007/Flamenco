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
        rel="stylesheet">
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .lyrics{
        white-space: pre-line;
      }
      @media (min-width:576px) {
          .cover.cover--round .cover__head:before {
              border-top-left-radius: 1rem;
              border-top-right-radius: 1rem;
              height: 89px;
          }

          .cover.cover--round .cover__image #profile {
              border-radius: 1rem;
              height: 299px;
          }

          .cover.cover--round .cover__image .cover__image__content {
              border-bottom-left-radius: 1rem;
              border-bottom-right-radius: 1rem
          }
      }
    </style>

</head>
<?php
$x=$_GET['id'];
 ?>
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
                         <li class="nav-item"><a href="music.php" class="nav-link d-flex align-items-center active"><i class="ri-music-2-line fs-5"></i> <span class="ps-3">Music</span></a></li>
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

                                            <?php
                                                    $con=mysqli_connect("localhost","root","","music");
                                                    $q="select * from music where musicid = '$x'";
                                                    $r=mysqli_query($con,$q);
                                                    $i=1;
                                                    while($row=mysqli_fetch_array($r)){


                                                      ?>
                <div class="section">
                    <div class="row" data-song-id=" <?php echo $row['musicid']; ?> " data-song-name="<?php echo $row['title'];  ?>"
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
                        data-song-album="<?php echo $ro['album'] ?>" data-song-url="uploadssong/<?php echo $row['musicfile'] ?>"
                        data-song-cover="uploadsing/<?php echo $row['art'] ?>">
                        <div class="col-xl-3 col-md-4">
                            <div class="cover cover--round">
                                <div class="cover__image"><img id="profile" src="uploadsing/<?php echo $row['art'] ?>" alt="Treasure face"></div>
                            </div>
                        </div>
                        <div class="col-1 d-none d-xl-block"></div>
                        <div class="col-md-8 mt-5 mt-md-0">
                            <div class="d-flex flex-wrap mb-2"><span class="text-dark fs-4 fw-semi-bold pe-2"><?php echo $row['title'];  ?></span>
                                <div class="dropstart d-inline-flex ms-auto"><a class="dropdown-link"
                                        href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
                                        aria-label="Cover options" aria-expanded="false"><i
                                            class="ri-more-fill"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-sm">
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                data-playlist-id="8">Add to playlist</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                data-queue-id="8">Add to queue</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                data-next-id="8">Next to play</a></li>
                                        <!-- <li><a class="dropdown-item" href="javascript:void(0);" role="button">Share</a>
                                        </li> -->
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);" role="button"
                                                data-play-id="8">Play</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="info-list info-list--dotted mb-3">
                              <?php
                              $id=$row["catid"];
                              $qq="select * from cat where catid = '$id'";
                              $rr=mysqli_query($con,$qq);
                              $ro=mysqli_fetch_array($rr);
                               ?>
                                <li><?php echo $ro['cat'] ?></li>
                                <li><?php echo $row['duration'] ?></li>
                                <li><?php echo $row['year'] ?></li>
                                <li><?php echo $row['studio'] ?></li>
                            </ul>
                            <div class="mb-4">
                              <?php
                              $id=$row["composerid"];
                              $qq="select * from composer where composerid = '$id'";
                              $rr=mysqli_query($con,$qq);
                              $ro=mysqli_fetch_array($rr);
                               ?>
                                <p class="mb-2">Compose by: <span class="text-dark fw-medium"><?php echo $ro['composer'] ?></span></p>
                                <?php
                                $id=$row["artistid"];
                                $qq="select * from artist where artistid = '$id'";
                                $rr=mysqli_query($con,$qq);
                                $ro=mysqli_fetch_array($rr);
                                 ?>
                                <p class="mb-2">Artist: <span class="text-dark fw-medium"><?php echo $ro['artist'] ?></span></p>
                                <?php
                                $id=$row["albumid"];
                                $qq="select * from album where albumid = '$id'";
                                $rr=mysqli_query($con,$qq);
                                $ro=mysqli_fetch_array($rr);
                                 ?>
                                <p class="mb-2">Album: <span class="text-dark fw-medium"><?php echo $ro['album'] ?></span></p>
                            </div>
                            <ul class="info-list mb-5">
                                <li>
                                    <div class="d-flex align-items-center"><button type="button" id="play_all"
                                            class="btn btn-icon btn-primary rounded-pill" data-play-id="8"><i
                                                class="ri-play-fill icon-play"></i> <i
                                                class="ri-pause-fill icon-pause"></i></button> <span
                                            class="ps-2 fw-semi-bold">Play</span></div>
                                </li>
																<?php

																			$qq="select COUNT(*) as 'count' from musicfav where musicid = '$x' and userid ='$idd'";
																			$ra=mysqli_query($con,$qq);
																			$rowcount=mysqli_fetch_array($ra);
																			if($rowcount['count']==1){
																				echo "<form action='#' method='POST'>";
																				echo "<li><button type='submit' class='btn align-items-center d-inline-flex active' name='fav' aria-label='Favorite' data-favorite-id='1'>";
																				echo "<i class='ri-heart-line heart-empty '></i>";
																				echo "<i class='ri-heart-fill heart-fill '></i>";
																				echo "</button>";
																			 }
																			elseif($rowcount['count']==0){
																				echo "<form action='#' method='POST'>";
																				echo "<li><button type='submit' class='btn  text-dark  align-items-center' name='favv' >";
																				echo "<i class='ri-heart-line heart-empty'></i>";
																				echo "</button>";
																				 }
																				 $q="select COUNT(*) as 'count' from musicfav where musicid = '$x'";
																				 $raa=mysqli_query($con,$q);
																				 $rowcounta=mysqli_fetch_array($raa);
																			 echo	"<span class='ps-2 fw-medium'>",$rowcounta['count'],"</span></a></li>";
																			 echo "</form>";

																			 if(isset($_POST["favv"])){
																				 $con=mysqli_connect("localhost","root","","music");
																				 $qqqq="INSERT INTO `musicfav` (`musicid`, `userid`) VALUES ('$x','$idd')";
																				 $rrr=mysqli_query($con,$qqqq);
																				 if($r)
																				 {
																						 echo"<script>location.href='song-details.php?id=$x'</script>";
																				 }
																			 }
																			 if(isset($_POST["fav"])){
																				 $con=mysqli_connect("localhost","root","","music");
																				 $qqqq="DELETE FROM `musicfav` WHERE musicid = '$x' and userid ='$idd'";
																				 $rrr=mysqli_query($con,$qqqq);
																				 if($r)
																				 {
																						 echo"<script>location.href='song-details.php?id=$x'</script>";
																				 }
																			 }
															 ?>
															 <div class="dropstart d-inline-flex"><a class="dropdown-link"
																			 href="javascript:void(0);" role="button" data-bs-toggle="dropdown"
																			 aria-label="Cover options" aria-expanded="false"><i
																					 class="ri-more-fill"></i></a>
																	 <ul class="dropdown-menu dropdown-menu-sm">


																		 <?php

																						 $qar="select * from playdetail where loginid ='$idd' ";
																						 $rar=mysqli_query($con,$qar);
																						 $i=1;
																						 while($roww=mysqli_fetch_array($rar)){

																							 $a=$roww['playid'];
																							 ?>


																			 <li><a class="dropdown-item" <?php echo "href='add-play.php?id=" . $x . "&play=" . $a . "'"; ?> role="button"><?php echo $roww['playname'] ?></a></li>
																							 <?php
																						 			}
				 				                                ?>
																	 </ul>
															 </div>

                            </ul>
                            <div class="mt-2"><span class="d-block text-dark fs-6 fw-semi-bold mb-3">Lyrics</span>
                                <p class="lyrics"><?php echo $row['lyrics'] ?></p>
                                <!-- <p>My love for you is like the most brave aubergine,<br>Your face reminds me of
                                    repugnant goats,<br>Together, we are like bread rolls and olive oil.</p>
                                <p>Oh darling Nigel,<br>My brave aubergine,<br>My repugnant onion,<br>The perfect
                                    companion to my bread rolls soul.</p>
                                <p>Poppies are red,<br>Kingfishers are blue,<br>I like drinking tequila,<br>But not as
                                    much as I love crashing with you!</p>
                                <p>Oh darling Nigel,<br>Your cheeks are like clean rakes on a summer day,<br>You're like
                                    the most super barman to ever walk Hull.</p>
                                <p>Your repugnant goat face,<br>Your olive oil soul,<br>Your clean cheeks,<br>Your super
                                    barman being...</p>
                                <p>How could I look at another when our brave aubergine love is so strong?</p>
                                <p>I love you Mrs Van De Kamp!</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Related <span class="text-primary">Songs</span></h3>
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
                                  <div class="cover cover--round">
                                      <div class="cover__head">
                                          <ul class="cover__label d-flex">
                                              <li><span class="badge rounded-pill bg-danger"><i
                                                          class="ri-heart-fill"></i></span></li>
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
                                                  <li><a class="dropdown-item" href="javascript:void(0);"
                                                          role="button">Share</a></li>
                                                  <li class="dropdown-divider"></li>
                                                  <li>
                                                          <?php echo "<a href='song-details.php?id=$a' class='dropdown-item'>"?>View
                                                                details</a>
                                                        </li>
                                              </ul>
                                          </div>
                                      </div>
                                            <?php echo "<a href='song-details.php?id=$a' class='cover__image'>"?>
                                        <img
                                              src="uploadsing/<?php echo $row['art'] ?>"></a>
                                      <div class="cover__foot">
                                              <?php echo "<a href='song-details.php?id=$a' class='cover__title text-truncate'>"?>
                                              <?php echo $row['title'] ?></a>
                                           <p class="cover__subtitle text-truncate">
																						 <?php
                                             $id=$row["artistid"];
                                             $qq="select * from artist where artistid = '$id'";
                                             $rr=mysqli_query($con,$qq);
                                             $ro=mysqli_fetch_array($rr);
                                              ?><?php echo "<a
                                                  href='artist-details.php?id=$id'>",$ro['artist'] ?></a></p>
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
                <!-- <div class="section">
                    <div class="section__head">
                        <h3 class="mb-0">Comments</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <form action="#" class="row mb-5">
                                <div class="col-12 mb-3 d-flex align-items-center"><span
                                        class="form-label mb-0">Ratings:</span>
                                    <div class="ps-2"><select class="form-select" style="min-width: 100px;"
                                            aria-label="Select ratings">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select></div>
                                </div>
                                <div class="col-6 mb-3"><input type="text" class="form-control" placeholder="Full name">
                                </div>
                                <div class="col-6 mb-3"><input type="text" class="form-control" placeholder="Email ID">
                                </div>
                                <div class="col-12 mb-4"><textarea name="comment" id="comment" cols="30" rows="4"
                                        class="form-control" placeholder="Write your comment"></textarea></div>
                                <div class="col-12"><button type="button" class="btn btn-primary"
                                        style="min-width: 160px;">Submit</button></div>
                            </form>
                            <div class="avatar avatar--lg align-items-start">
                                <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div>
                                <div class="avatar__content"><span class="avatar__title mb-1">Androws Kinny</span> <span
                                        class="avatar__subtitle mb-2">Apr 22, 2019</span>
                                    <div class="text-warning d-flex mb-1"><i class="ri-star-s-fill"></i> <i
                                            class="ri-star-s-fill"></i> <i class="ri-star-s-fill"></i> <i
                                            class="ri-star-s-fill"></i></div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel
                                        necessitatibus suscipit dicta quasi velit ratione nemo, voluptatum debitis cum
                                        sit quod dolor pariatur laudantium cumque.</p><a href="javascript:void(0);"
                                        class="btn btn-link">
                                        <div class="btn__wrap"><i class="ri-reply-line fs-6"></i> <span>Reply</span>
                                        </div>
                                    </a>
                                    <div class="avatar avatar--lg align-items-start mt-4">
                                        <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div>
                                        <div class="avatar__content"><span class="avatar__title">Androws Kinny</span>
                                            <span class="avatar__subtitle mb-2">Apr 23, 2019</span>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel
                                                necessitatibus suscipit dicta quasi velit ratione nemo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="avatar avatar--lg align-items-start mt-4">
                                <div class="avatar__image"><img src="images/users/thumb.jpg" alt="user"></div>
                                <div class="avatar__content"><span class="avatar__title mb-1">Androws Kinny</span> <span
                                        class="avatar__subtitle mb-2">Apr 16, 2019</span>
                                    <div class="text-warning d-flex mb-1"><i class="ri-star-s-fill"></i> <i
                                            class="ri-star-s-fill"></i> <i class="ri-star-s-fill"></i> <i
                                            class="ri-star-s-fill"></i> <i class="ri-star-s-fill"></i></div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam vel
                                        necessitatibus suscipit dicta quasi velit ratione nemo, voluptatum debitis cum
                                        sit quod dolor pariatur laudantium cumque.</p><a href="javascript:void(0);"
                                        class="btn btn-link">
                                        <div class="btn__wrap"><i class="ri-reply-line fs-6"></i> <span>Reply</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4"></div>
                    </div>
                </div> -->
            </div>
            <!-- <footer id="footer">

            </footer> -->
        </main>
    </div>
    
    <div id="backdrop"></div>
    <script src="js/plugins.bundle.js"></script>
    <script src="js/scripts.bundle.js"></script>
</body>

</html>
