<?php
        session_start();
        $idd = $_SESSION['id'];
        $con=mysqli_connect("localhost","root","","music");
        $q="select * from reg where loginid ='$idd'";
        $re=mysqli_query($con,$q);
        $row=mysqli_fetch_array($re);

        $x=$_POST["name"];
        



        $con=mysqli_connect("localhost","root","","music");
        $q="INSERT INTO `composer`(`composer`) VALUES ('$x')";
        $r=mysqli_query($con,$q);
        
        if($r){
            
            
            

            $rr="select * from composer where composer = '$x'";
            $st=mysqli_query($con,$rr);
            
            while($row=mysqli_fetch_array($st)){
              $y=$row['composerid'];
                $_SESSION["composer"]=$y;
            }


            echo "<script>alert('Value added successfully. Artist: " . $y . "')</script>";
            echo "<script>window.location.href = 'add-category.php';</script>";
         
            
        }
        mysqli_close($con);
      
      ?>