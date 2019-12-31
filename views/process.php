<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $description = $_POST['description'];
	 $image = $_POST['image'];
	
	 $sql = "INSERT INTO categories (name,description,image)
	 VALUES ('$name','$description','$image')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>