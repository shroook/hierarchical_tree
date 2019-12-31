<?php
include '../model/database.php';
//  category_id
$catg=mysqli_query($conn,"SELECT * FROM category ");
$row1=mysqli_fetch_array($catg);
$vall=$_GET['id'];
//
$result=array();
$record=array();

$fetchall=mysqli_query($conn,"SELECT * FROM product_category ");
//$pid=mysqli_query($conn,"SELECT product_id FROM product_category ");



while($row = mysqli_fetch_assoc($fetchall))
{   foreach($row as $key => $value)
    {
	   	$checked_arr=explode(',',$value);  
      if(in_array($vall,$checked_arr))
    {  
       
      $result=$checked_arr;

     //print_r($result);
     $pid=$row['product_id'];
     //$pid=mysqli_query($conn,"SELECT product_id FROM product_category WHERE category_id IN(".implode(',', $result).")" );
     //$v=mysqli_fetch_assoc($pid);
     //print_r($pid);
     $products=mysqli_query($conn,"SELECT * FROM products WHERE Product_id=$pid ");
     while($rowss=mysqli_fetch_assoc($products))
      {
       $record[]= $rowss;
       
      //print_r($arr);
      }
  //$record=array();
  //$products=mysqli_query($conn,"SELECT * FROM products WHERE product_id"); 
   //   die('ttt');
  //$res=$v['product_id'];
     //print_r($v);
   //   die;
    }
  }
 
}




?>