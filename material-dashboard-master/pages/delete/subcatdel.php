<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from subcat where subcatid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../subcatt.php');
            }
            mysqli_close($con); ?>
