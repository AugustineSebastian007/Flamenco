<?php

        session_start();
        $idd = $_SESSION['id'];
        $con=mysqli_connect("localhost","root","","music");
        $q="select * from reg where loginid ='$idd'";
        $re=mysqli_query($con,$q);
        $row=mysqli_fetch_array($re);

        
        $x=$_POST["name"];
        $y=$_POST["loc"];
        $z=$_POST["email"];


        $con=mysqli_connect("localhost","root","","music");

        $q="UPDATE `reg` SET `name`='$x',`loc`='$y',`email`='$z' WHERE loginid='$idd'";
        $r=mysqli_query($con,$q);
        if($r)
        {
            echo "<script>alert('value added successfully')</script>";
    
        }
        else {
            echo "<script>alert('update unsuccessfull')</script>";
        }

        mysqli_close($con);
        

 ?>