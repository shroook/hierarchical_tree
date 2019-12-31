
<?php


if(count($_POST)>0) {
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
 if(empty($_POST['parent_id']))
 {
   mysqli_query($conn,"UPDATE categories set  name='" . $_POST['name'] . "',parent_id='" . 0 . "' , description='" . $_POST['description'] . "', image='" . $file . "'  WHERE id='" . $_GET['id'] . "'");
   $message = "Record Modified Successfully";
 }
else{

 mysqli_query($conn,"UPDATE categories set  name='" . $_POST['name'] . "',parent_id='" . $_POST['parent_id'] . "' , description='" . $_POST['description'] . "', image='" . $file . "'  WHERE id='" . $_GET['id'] . "'");
 $message = "Record Modified Successfully";
}
 }



function createTreeView($parent, $menu,$current_parent) {
   $html = "";
 
   if (isset($menu['parents'][$parent])) {
      $html .= "
      <ol class='tree'>";
      
       foreach ($menu['parents'][$parent] as $itemId) {
          if(!isset($menu['parents'][$itemId])) {
           
            //$current_parent="select parent_id from categories WHERE id=='" . $_GET['id'];
           $html .= "<li>
           
           <input type='radio'   checked=$current_parent  name='parent_id'   value='".$menu['items'][$itemId]['id']."' />
           
           <label for='subfolder2'>
             
             
            ".$menu['items'][$itemId]['name']."</a></label>
             </li>";
             
          }
          if(isset($menu['parents'][$itemId])) {
            //$current_parent="select parent_id from categories WHERE id=='" . $_GET['id'];
             //echo($current_parent);
            //$sql="select parent_id from categories WHERE id='" . $_GET['id'];
             $html .= "
            
             <li><input type='radio'   checked=$current_parent  name='parent_id'  value= '".$menu['items'][$itemId]['id']."'  /><label for='subfolder2'>".$menu['items'][$itemId]['name']."</a></label>
             ";
           
             $html .= createTreeView($itemId, $menu,$current_parent);
             $html .= "</li>";
             
          }
          
       }
       
       $html .= "</ol>";
  
      }
  
   return $html;
}
?>