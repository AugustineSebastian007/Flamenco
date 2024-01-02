<?php
// Get the album id and user id from the AJAX request
$albumId = $_POST['albumid'];
$userId = $_POST['userid'];

// Connect to the database
$con = mysqli_connect("localhost", "root", "", "music");

// Check if the user already favorited the album
$checkQuery = "SELECT COUNT(*) as count FROM albumfav WHERE albumid = '$albumId' and userid = '$userId'";
$checkResult = mysqli_query($con, $checkQuery);
$checkRow = mysqli_fetch_assoc($checkResult);

if ($checkRow['count'] == 0) {
    // Add the album to user's favorites
    $insertQuery = "INSERT INTO albumfav (albumid, userid) VALUES ('$albumId', '$userId')";
    $insertResult = mysqli_query($con, $insertQuery);

    if ($insertResult) {
        // Return success response with updated count and is_fav value
        $countQuery = "SELECT COUNT(*) as count FROM albumfav WHERE albumid = '$albumId'";
        $countResult = mysqli_query($con, $countQuery);
        $countRow = mysqli_fetch_assoc($countResult);
        $response = array(
            'is_fav' => true,
            'count' => $countRow['count']
        );
        echo json_encode($response);
    } else {
        // Return error response
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Return error response
    header("HTTP/1.1 400 Bad Request");
    echo "Album already favorited by user";
}

// Close the database connection
mysqli_close($con);
?>
