<?php
$con=mysqli_connect("localhost","root","","music");
 if(isset($_POST['uname']) && ($_POST['uname'])!="") {
     if ($stmt = $con->prepare("SELECT artist FROM artist WHERE artist = ?")) {
         $stmt->bind_param('s', $_POST['uname']);
         $stmt->execute();
         $stmt->store_result();
         $numRows = $stmt->num_rows;
         if ($numRows > 0) {
            echo "<p class='error'> Artist already existing.</p>";
         }
     }
 }
$con->close();
ob_end_flush();
?>
