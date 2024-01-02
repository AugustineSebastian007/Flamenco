<?php

echo('<PRE>');
print_r($_GET);
if($_GET['payment_status'] == 'Credit'){
// Create connection
$con=mysqli_connect("localhost","root","","music");



$roomNo = $_GET['roomNo'];
$payment_id = $_GET['payment_id'];
$payment_status = $_GET['payment_status'];
$payment_request_id = $_GET['payment_request_id'];

$sql = "INSERT INTO `payment`( `loginid`, `payment_status`, `payment_request_id`)
VALUES ( '$roomNo', '$payment_status', '$payment_request_id')";



// $re=mysqli_query($con,$q);

$re=mysqli_query($con,$sql);



  if ($re) {
    $r = "UPDATE `usertype` SET `usertype`='2' WHERE `usertypeid`='$roomNo'" ;
      mysqli_query($con, $r);
      echo "<script>alert('value added successfully')</script>";
    } else {
      echo "<script>alert('value add unsuccessful')</script>";
    }



echo "<script>window.close();</script>";

mysqli_close($con);

}
?>
