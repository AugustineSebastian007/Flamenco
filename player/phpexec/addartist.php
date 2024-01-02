<?php
        session_start();
        $idd = $_SESSION['id'];
        $con=mysqli_connect("localhost","root","","music");
        $q="select * from reg where loginid ='$idd'";
        $re=mysqli_query($con,$q);
        $row=mysqli_fetch_array($re);

        $x=$_POST["name"];
        $image=$_FILES["file"]["name"];



        $con=mysqli_connect("localhost","root","","music");
        $q="INSERT INTO `artist`(`img`, `artist`) VALUES ('$image','$x')";
        $r=mysqli_query($con,$q);
        if($r)
        {
        $targetDir="../../material-dashboard-master/pages/uploads/";
        
        $targetFilePath=$targetDir.$image;
        move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath);
        }
        if($r){
            
            
            

            $rr="select * from artist where artist = '$x'";
            $st=mysqli_query($con,$rr);
            
            while($row=mysqli_fetch_array($st)){
              $y=$row['artistid'];
                $_SESSION["artist"]=$y;
            }


            echo "<script>alert('Value added successfully. Artist: " . $y . "')</script>";
            echo "<script>window.location.href = 'add-composer.php';</script>";
            
        }
        mysqli_close($con);
      
      ?>