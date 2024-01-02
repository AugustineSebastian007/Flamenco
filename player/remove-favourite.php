<?php
// Get the album ID and user ID from the POST request
$albumId = $_POST['albumid'];
$userId = $_POST['userid'];

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "music");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the favorite record exists
$result = mysqli_query($con, "SELECT * FROM albumfav WHERE albumid = '$albumId' AND userid = '$userId'");
if (mysqli_num_rows($result) == 1) {
    // Remove the favorite record from the database
    mysqli_query($con, "DELETE FROM albumfav WHERE albumid = '$albumId' AND userid = '$userId'");
}

// Get the total number of favorites for the album
$result = mysqli_query($con, "SELECT COUNT(*) as 'count' FROM albumfav WHERE albumid = '$albumId'");
$rowcount = mysqli_fetch_array($result);

// Return the updated count and favorite status as a JSON response
$response = array(
    'is_fav' => false,
    'count' => $rowcount['count']
);
echo json_encode($response);

// Close the database connection
mysqli_close($con);
?>
