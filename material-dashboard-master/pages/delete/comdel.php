<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from composer where composerid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../comt.php');
            }
            mysqli_close($con); ?>
