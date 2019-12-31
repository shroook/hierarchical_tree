<?php
include_once 'database.php';
$sql = "DELETE FROM categories WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:views/viewcategory.php");
    exit;} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>