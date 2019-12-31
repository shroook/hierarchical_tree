<?php
include_once 'database.php';
if(isset($_POST['save']))

{	
       $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"])); 
	  


       if(isset($_POST))
       {
		if(empty($_POST['parent_id']))
		{
          
			$product_name = $_POST['product_name'];
			$product_description = $_POST['product_description'];
            $sql = "INSERT INTO products(product_name,product_description,product_image) VALUES('$product_name','$product_description','$file');";
            
            //$sql = "INSERT INTO product_category(category_id) VALUES ('0');";

        
        }
		else{
			
		 
			$product_name = $_POST['product_name'];
			$product_description = $_POST['product_description'];
			//$image = $_POST['image'];
          
		
            $sql = "INSERT INTO products(product_name,product_description,product_image) VALUES('$product_name','$product_description','$file'); 
			";
		}
		
	
		$checkbox1 = $_POST['parent_id'];
		$chk="";  
		foreach($checkbox1 as $chk1)  
		   {  
			  $chk.= $chk1.",";  
		   }  
	 if (mysqli_query($conn, $sql)) {
		$checkbox = $_POST['check'];         




		 $lastid=mysqli_insert_id($conn); 
		 $sql="INSERT INTO product_category(category_id,product_id) VALUES ('$chk','$lastid')";
		 mysqli_query($conn,$sql);
		 
header("Location:views/viewproduct.php");
exit;	 } else {

		echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     
     
     mysqli_close($conn);
     
	}


}


?>

