<?php
require('../../php/connect.php'); // Include the database connection file

if(isset($_GET['id']) && isset($_GET['action']) && isset($_GET['veri_status'])) {
    $vid = $_GET['id'];
    $action = $_GET['action'];
    $acc_status = $_GET['veri_status'];

    if($action == 'approve') {
        // Update the acc_status to 1 for approved accidents
        $sql = "UPDATE verifications SET veri_status = 1 WHERE vid = '$vid'";
    } elseif($action == 'reject') {
        // Update the acc_status to 2 for rejected accidents
        $sql = "UPDATE verifications SET veri_status = 2 WHERE vid = '$vid'";
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