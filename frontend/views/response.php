
	<?php
	include '../model/database.php';
	function categoryTree($parent_id = NULL, $sub_mark = ''){
        
        $query= mysqli_query($conn,"SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY title ASC");
       
        if(mysqli_num_rows($query) >= 0){
            while($treerow =mysqli_fetch_assoc($query)){
                echo '<option value="'.$treerow['id'].'">'.$sub_mark.$treerow['title'].'</option>';
                categoryTree($treerow['id'], $sub_mark.'---');
            }
        }
    } 
	
	?>
