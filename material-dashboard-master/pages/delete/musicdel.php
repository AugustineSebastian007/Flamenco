<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from music where musicid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../musict.php');
            }
            mysqli_close($con); ?>
