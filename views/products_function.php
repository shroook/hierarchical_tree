<?php
$res=mysqli_query($conn,"SELECT category_id FROM product_category  WHERE product_id='" . $_GET['product_id'] . "'");

while($row = mysqli_fetch_assoc($res))
{   foreach($row as $key => $value)
    {
	   $checked_arr=explode(',',$value);  
      $result=$checked_arr;
    }
 }


if(count($_POST)>0) {
   
   $file = addslashes(file_get_contents($_FILES["product_image"]["tmp_name"])); 
   //$sql = "INSERT INTO products(product_name,product_description,product_image) VALUES('$product_name','$product_description','$file'); 

if(!empty($_POST['parent_id']))
{ 
         $chks=$_POST['parent_id'];
         $checkbox1 = implode(',',$chks);
		
   //$parent_idss = implode(',', $chk);
    //mysqli_query($conn,"UPDATE product_category set category_id='". $checkbox1 . "' ,  WHERE product_id='" . $_GET['product_id'] . "'");
    $message = "Record Modified Successfully";
//mysqli_query($conn,$sql);




mysqli_query($conn,"UPDATE products set  product_name='" . $_POST['product_name'] . "', product_description='" . $_POST['product_description'] . "', product_image='" . $file . "'  WHERE product_id='" . $_GET['product_id'] . "'");
mysqli_query($conn,"UPDATE product_category set  category_id='" .$checkbox1 . "'  WHERE product_id='" . $_GET['product_id'] . "'");

}
else{
   mysqli_query($conn,"UPDATE products set  product_name='" . $_POST['product_name'] . "', product_description='" . $_POST['product_description'] . "', product_image='" . $file . "'  WHERE product_id='" . $_GET['product_id'] . "'");
mysqli_query($conn,"UPDATE product_category set  category_id='" .'0' . "'  WHERE product_id='" . $_GET['product_id'] . "'");

}
   
}
 



 
// function to create dynamic treeview menus
function createTreeView($parent, $menu) {
   $html = "";
   if (isset($menu['parents'][$parent])) {
      $html .= "
      <ol class='tree'>";
      
       foreach ($menu['parents'][$parent] as $itemId) {
          if(!isset($menu['parents'][$itemId])) {
           $html .= "<li>
           
           <input type='checkbox'   name='parent_id[]'  value='".$menu['items'][$itemId]['id']."' />
           
           <label for='subfolder2'>
             
             
            ".$menu['items'][$itemId]['title']."</a></label>
             </li>";
             
          }
          
          if(isset($menu['parents'][$itemId])) {
             $html .= "
             <li><input type='checkbox'  name='parent_id[]'  value= '".$menu['items'][$itemId]['id']."'  /><label for='subfolder2'>".$menu['items'][$itemId]['title']."</a></label>
             ";
             $html .= createTreeView($itemId, $menu);
             $html .= "</li>";
          }
       }
       $html .= "</ol>";
   }
   return $html;
}
?>
