<?php
    require '../connect.php';
    $Id = $_REQUEST['Id'];
    
    $sql = "DELETE FROM customer WHERE Id = '$Id' ";

    if ($conn->query($sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    // mysqli_query($conn, $sql) or die ("Delete จากตาราง Customer มีข้อผิดผลาดเกิดขึ้น" . mysqli_error());
    // mysqli_close($conn);

    header("location:../customerList.php")
?>