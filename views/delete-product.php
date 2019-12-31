<?php
include_once 'database.php';
$sql=$sql = "SELECT category_id FROM product_category WHERE product_id='" . $_GET["product_id"] . "'";




$sql = "DELETE FROM products WHERE product_id='" . $_GET["product_id"] . "'";
if(!empty($sql))
{
    echo "this product is used im many categories";
    //header("Location:viewproduct.php");
  
    //exit;
}
if (mysqli_query($conn, $sql)) {
    header("Location:views/viewproduct.php");
    exit;} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>