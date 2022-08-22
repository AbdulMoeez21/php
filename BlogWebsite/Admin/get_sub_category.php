<?php



$id = $_POST['category_id'];



include("../database/connection.php");

$sql = 'SELECT * FROM `sub_categories` where category_id = ' . $id . '';
$result = mysqli_query($conn, $sql);

$options="";

while ($row = mysqli_fetch_assoc($result)) {

    // echo var_dump($row) ;

    $options.= '<option value=' . $row['id'] . '>' . $row['name'] . '</option>';
}



echo $options;
