<?php
        session_start();
        $idd = $_SESSION['id'];
        $con=mysqli_connect("localhost","root","","music");
        $q="select * from reg where loginid ='$idd'";
        $re=mysqli_query($con,$q);
        $row=mysqli_fetch_array($re);

        $x=$_POST["name"];
      



        $con=mysqli_connect("localhost","root","","music");
        $q="INSERT INTO `cat`(`cat`) VALUES ('$x')";
        $r=mysqli_query($con,$q);
        
        if($r){
            $rr="select * from cat where cat = '$x'";
            $st=mysqli_query($con,$rr);
            
            while($row=mysqli_fetch_array($st)){
              $y=$row['catid'];
                $_SESSION["cat"]=$y;
            }
            echo "<script>alert('Value added successfully. cat: " . $y . "')</script>";
            echo "<script>window.location.href = 'add-composer.php';</script>";   
        }
        mysqli_close($con);
      
      ?>