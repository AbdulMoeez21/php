<?php

include("./connection.php");


if (isset($_POST['user_id'])) {
    $id = $_POST['user_id'];
    


    $sql = 'DELETE FROM `product_table` WHERE Id = '.$_POST['user_id'].'';
    // echo $sql;
    $result = mysqli_query($conn, $sql);


    // Delete Successfully
    if (!$result) {
       // echo 1;
       echo '<script>alert("error")</script>';

        // header('location:index.php');

    }
} else {
    echo 0;
}