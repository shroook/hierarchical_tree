
<?php
include '../model/database.php';


$result = mysqli_query($conn,"SELECT * FROM categories ");
//$val=mysqli_fetch_array($result);
//$ids=$val['id']; //ids of catg
//$imgs=array();
$res= mysqli_query($conn,"SELECT * FROM images ORDER BY category_id" );
$val2=mysqli_fetch_array($res);
$imgid=$val2['category_id'];


$records=array();
 $record = array();
 
       while($row = mysqli_fetch_assoc($result)){
               $ids=$row['id'];
          
          $imgs=mysqli_query($conn,"SELECT *  FROM images  where category_id='$ids' ORDER BY id DESC LIMIT 1");
         
            $record[] = $row;
            //$records[] = $rows;
            while($rows = mysqli_fetch_assoc($imgs)){
           
                $records[] = $rows;
          
              
        }
    }

    









    
?>

