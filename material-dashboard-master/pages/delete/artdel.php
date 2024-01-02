<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from artist where artistid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../artist.php');
            }
            mysqli_close($con); ?>
