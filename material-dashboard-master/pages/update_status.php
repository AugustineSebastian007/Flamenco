<?php
$id = $_GET['id'];
$user = $_GET['user'];
if ($id == 0) {
  $con=mysqli_connect("localhost","root","","music");
  $q="UPDATE `usertype` SET `status`='1' WHERE `usertypeid`= '$user'";
  $r=mysqli_query($con,$q);
}
if ($id == 1) {
  $con=mysqli_connect("localhost","root","","music");
  $q="UPDATE `usertype` SET `status`='0' WHERE `usertypeid`= '$user'";
  $r=mysqli_query($con,$q);
}
echo"<script>location.href='tables.php'</script>";
?>
