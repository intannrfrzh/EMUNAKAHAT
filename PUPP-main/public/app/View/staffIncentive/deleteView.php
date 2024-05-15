<?php
include '../../Config/connect.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM incentive_list WHERE list_ID = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ('location: listView.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
