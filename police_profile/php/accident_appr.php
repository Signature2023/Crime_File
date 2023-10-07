<?php
require('../../php/connect.php'); // Include the database connection file

if(isset($_GET['id']) && isset($_GET['action']) && isset($_GET['acc_status'])) {
    $CID = $_GET['id'];
    $action = $_GET['action'];
    $acc_status = $_GET['acc_status'];

    if($action == 'approve') {
        // Update the acc_status to 1 for approved accidents
        $sql = "UPDATE accident_reports SET acc_status = 1 WHERE CID = '$CID'";
    } elseif($action == 'reject') {
        // Update the acc_status to 2 for rejected accidents
        $sql = "UPDATE accident_reports SET acc_status = 2 WHERE CID = '$CID'";
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