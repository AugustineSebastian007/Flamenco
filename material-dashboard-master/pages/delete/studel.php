<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from album where albumid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../stut.php');
            }
            mysqli_close($con); ?>
