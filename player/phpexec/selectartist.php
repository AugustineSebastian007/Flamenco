<?php
            session_start();
            $idd = $_SESSION['id'];
            $con=mysqli_connect("localhost","root","","music");
            $q="select * from reg where loginid ='$idd'";
            $re=mysqli_query($con,$q);
            $row=mysqli_fetch_array($re);
            
            

            $a=$_POST["artist"];
            $_SESSION["artist"]=$a;
            
            echo "<script>alert('Value added successfully. Artist: " . $a . "')</script>";
            
            echo "<script>window.location.href = 'add-composer.php';</script>";
            
            mysqli_close($con); 
    ?>