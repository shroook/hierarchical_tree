<?php
include_once 'database.php';
if(isset($_POST['save']))

{	
	  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
	   if(isset($_POST)){
		if(empty($_POST['parent_id']))
		{
			$name = $_POST['name'];
			$description = $_POST['description'];
			$sql = "INSERT INTO categories (parent_id,name,description,image)
			VALUES ('0','$name','$description','$file')";
		}
		else
		{
			$parent_id = $_POST['parent_id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			//$image = $_POST['image'];
		   
			$sql = "INSERT INTO categories (parent_id,name,description,image)
			VALUES ('$parent_id','$name','$description','$file')";
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



if(isset($_POST['add']))

{	
	$result = mysqli_query($conn,"SELECT * FROM categories WHERE id='" . $_GET['id'] . "'");
	$number_of_rows = mysqli_num_rows($result);
$rows= mysqli_fetch_array($result);
$val=$rows['id'];



	  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
	   if(isset($_POST)){


		  $val=$_POST['add'];

		  if($number_of_rows == 0)
			  {
				$sql = "insert images (image,category_id)
				VALUES ('$file','$val')";
			  }
			  else{
				$data_row = mysqli_fetch_row($result);
				$record_id = $data_row[0];
				
				$sql=mysqli_query($conn,"UPDATE images set  image='" .$file . "'  WHERE category_id='" . $val . "'");
			  }
			
		
		}
		
	

    
	 if (mysqli_query($conn, $sql)) {
header("Location:views/viewcategory.php");
exit;	 } else {

		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn); 
}


?>


