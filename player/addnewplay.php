<?php
            session_start();
            $idd = $_SESSION['id'];
            $con=mysqli_connect("localhost","root","","music");
            $q="select * from reg where loginid ='$idd'";
            $re=mysqli_query($con,$q);
            $row=mysqli_fetch_array($re);
            
            

            $a=$_POST["playname"];
            
            $q="INSERT INTO `playdetail`(`playname`, `loginid`) VALUES ('$a','$idd')";
            $r=mysqli_query($con,$q);
            if($r)
            {
                echo "<script>alert('value added successfully')</script>";
                
            }
            mysqli_close($con); 
    ?>