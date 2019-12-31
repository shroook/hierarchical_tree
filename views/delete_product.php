<?php
include_once 'database.php';

$sql= "DELETE FROM products WHERE product_id='" . $_GET["product_id"] . "'";

if (mysqli_query($conn, $sql)) {
    header("Location:viewproduct.php");
    exit;} else {
    echo "Error deleting record: " . mysqli_error($conn);


    }



mysqli_close($conn);

?>
