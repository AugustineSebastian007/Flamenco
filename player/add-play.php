<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $y=$_GET['play'];

            $check_query = "SELECT * FROM `playlist` WHERE `playid`='$y' AND `musicid`='$x'";
            $result = mysqli_query($con, $check_query);
            if (mysqli_num_rows($result) == 0) {
                $q="INSERT INTO `playlist`(`playid`, `musicid`) VALUES ('$y','$x')";
                $r=mysqli_query($con,$q);
                if($r){
                    echo "<script> alert('value added') </script>";
                }
              }
              else {
                echo "<script> alert('value already added') </script>";
              }
              header('Location: song-details.php?id='.$x);
            mysqli_close($con);
            ?>
