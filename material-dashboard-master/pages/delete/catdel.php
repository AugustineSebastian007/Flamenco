<?php
        $con=mysqli_connect("localhost","root","","music");
            $x=$_GET['id'];
            $q="delete from cat where catid='$x'";
            $r=mysqli_query($con,$q);
            if($r){
                header('Location: ../catt.php');
            }
            mysqli_close($con); ?>
