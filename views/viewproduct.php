<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM products");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 



<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">3</span></a>
      <ul>
      
        <li><a href="addcategory.php">Add Category</a></li>
        <li><a href="viewcategory.php">view Category</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span> <span class="label label-important">3</span></a>
      <ul>
      
        <li><a href="addproduct.php">Add Product</a></li>
        <li><a href="viewproduct.php">View Products</a></li>


      </ul>
    </li>
  
   
    </li>
  
   
   
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Products</a> </div>
  
    <h1>Products</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
      <form enctype="multipart/form-data" > 
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Products</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Image</th>
                

              
                </tr>
              </thead>
              <tbody>
              
            
                <tr class="gradeA">
                <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["product_name"]; ?></td>
    <td><?php echo $row["product_description"]; ?></td>
    <td ><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['product_image'] ).'" height="40" width="40"/>'
 ?></td>
 
    
    <td class="center">
 
 <a href="./update_product.php?product_id=<?php echo $row["product_id"]; ?>" class="btn btn-success">Edit</a> 

</td>
   
</tr>
<?php
$i++;
  
}
?>

                </tr>
             
              </tbody>
            </table>
            <?php
}
else{
    echo "No result found";
}
?>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
