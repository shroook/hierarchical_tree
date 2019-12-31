<?php
include_once 'database.php';
if(isset($_POST['Add']))

{	
	  $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"])); 
	   if(isset($_POST)){
		if(empty($_POST['parent_id']))
		{
			$name = $_POST['product_name'];
			$description = $_POST['product_description'];
			$sql = "INSERT INTO products (parent_id,product_name,product_description,product_image)
			VALUES ('0','$product_name','$product_description','$file')";
		}
		else{
			$parent_id = $_POST['parent_id'];
			$product_name = $_POST['product_name'];
			$product_description = $_POST['product_description'];
			//$image = $_POST['image'];
		   
			$sql = "INSERT INTO products (parent_id,product_name,product_description,product_image)
			VALUES ('$parent_id','$product_name','$product_description','$file')";
		}
		
	

    
	 if (mysqli_query($conn, $sql)) {
header("Location:views/viewcategory.php");
exit;	 } else {

		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

}
}


?>



