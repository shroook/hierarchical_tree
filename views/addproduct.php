

<?php
include 'database.php';
include "products_function.php";
$result = mysqli_query($conn,"SELECT * FROM categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<link rel="stylesheet" href="./css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="./css/uniform.css" />
<link rel="stylesheet" href="./css/select2.css" />
<link rel="stylesheet" href="./css/matrix-style.css" />
<link rel="stylesheet" href="./css/matrix-media.css" />
<link rel="stylesheet" href="style3.css" type="text/css" media="all">

<link href="./font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
   
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 


<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span> <span class="label label-important">3</span></a>
      <ul>
      
        <li><a href="addcategory.php">Add Category</a></li>
        <li><a href="viewcategory.php">View Categories</a></li>


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
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Add Products</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Products</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="../insertproduct.php" name="basic_validate" id="basic_validate" novalidate="novalidate" >
            <?php
            
            $sql = "SELECT id, title,parent_id FROM categories ";
            
             $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
              // Create an array to conatin a list of items and parents
                 $menus = array(
            'items' => array(),
            'parents' => array()
               );
              // Builds the array lists with data from the SQL result
                 while ($items = mysqli_fetch_assoc($result)) {
            // Create current menus item id into array
                   $menus['items'][$items['id']] = $items;
            // Creates list of all items with children
                    $menus['parents'][$items['parent_id']][] = $items['id'];
                }
                
             // Print all tree view menus 
               echo createTreeView(0, $menus);
                
            ?>
          <div class="control-group">
                <label class="control-label">product Name</label>
                <div class="controls">
              
                  <input type="text" name="product_name" id="product_name" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="product_description" id="product_description" require>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image :</label>
                <div class="controls">
                  <input type="file" name="product_image" value="" accept=".png,.gif,.jpg,.webp" require >
                </div>
              </div>
            
              <div class="form-actions">
              <input type="submit" name="save" value="submit" require>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="./js/jquery.min.js"></script> 
<script src="./js/jquery.ui.custom.js"></script> 
<script src="./js/bootstrap.min.js"></script> 
<script src="./js/jquery.uniform.js"></script> 
<script src="./js/select2.min.js"></script> 
<script src="./js/jquery.validate.js"></script> 
<script src="./js/matrix.js"></script> 
<script src="js/matrix.form_validation.js"></script>
<script src="./"></script>
</body>
</html>
