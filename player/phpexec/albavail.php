<?php
$con=mysqli_connect("localhost","root","","music");
 if(isset($_POST['uname']) && ($_POST['uname'])!="") {
     if ($stmt = $con->prepare("SELECT album FROM album WHERE album = ?")) {
         $stmt->bind_param('s', $_POST['uname']);
         $stmt->execute();
         $stmt->store_result();
         $numRows = $stmt->num_rows;
         if ($numRows > 0) {
            echo "<p class='error'> Album already existing.</p>";
            echo "<script>document.getElementsByName('submit')[0].disabled = true;</script>";
         }
     }
 }
$con->close();
ob_end_flush();
?>
