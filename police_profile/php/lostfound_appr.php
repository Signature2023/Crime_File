<?php
require('../../php/connect.php'); // Include the database connection file

if(isset($_GET['id']) && isset($_GET['action']) && isset($_GET['lost_status'])) {
    $lid = $_GET['id'];
    $action = $_GET['action'];
    $lost_status = $_GET['lost_status'];

    if($action == 'approve') {
        // Update the acc_status to 1 for approved accidents
        $sql = "UPDATE lost_found SET lost_status = 1 WHERE lid = '$lid'";
    } elseif($action == 'reject') {
        // Update the acc_status to 2 for rejected accidents
        $sql = "UPDATE lost_found SET lost_status = 2 WHERE lid = '$lid'";
    }

    if ($conn->query($sql) === TRUE) {
        // Redirect to the accident reports page after updating the status
        header("Location:../index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to an error page if the required parameters are not provided
    header("Location: ../index.php");
    exit();
}
?>