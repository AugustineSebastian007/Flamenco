<?php
            session_start();
            $idd = $_SESSION['id'];
            $con=mysqli_connect("localhost","root","","music");
            $q="select * from reg where loginid ='$idd'";
            $re=mysqli_query($con,$q);
            $row=mysqli_fetch_array($re);
            
            

            $a=$_POST["category"];
            $_SESSION["cat"]=$a;
            
            echo "<script>alert('Value added successfully. Category: " . $a. "')</script>";
            
            echo "<script>window.location.href = 'add-album.php';</script>";
            
            mysqli_close($con); 
    ?>