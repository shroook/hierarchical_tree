<?php
include_once 'database.php';
include_once("functions.php");
$result = mysqli_query($conn,"SELECT * FROM categories WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
$parent_id=$row['parent_id'];
$result2 = mysqli_query($conn,"SELECT * FROM categories WHERE id='" . $parent_id . "'");
$row2= mysqli_fetch_array($result2);
$val =$row2['id']
//$parent_ids=$row2['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Admin</title>
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
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Edit Category</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Category</h5>
          </div>
          <div class="widget-content nopadding">

            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
            <?php if(isset($message)) { echo $message; } ?>



            <?php
            
    $sql = "SELECT id, name,parent_id FROM categories ";
    $sql2="SELECT id, parent_id FROM categories ";;
    

  //$parent_select="SELECT id from categories where"
    
    //$sql = "SELECT name FROM categories WHERE $parent_id==id";

	   $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	       $menus = array(
		'items' => array(),
		'parents' => array()
	     );
	       while ($items = mysqli_fetch_assoc($result)) {

          $menus['items'][$items['id']] = $items;
	        	$menus['parents'][$items['parent_id']][] = $items['id'];
        }

        
        
	  
       echo createTreeView(0,$menus,$val);
       
       
    ?>	
    
                <div class="control-group">
                <label class="control-label">Category Name</label>
                <div class="controls">
                  <input type="text" name="name" value="<?php echo $val; ?>" >

                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <input type="text" name="description" value="<?php echo $row['description']; ?>" >
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Image :</label>
                <div class="controls">
        
                  <input type="file" name="image"  accept=".png,.gif,.jpg,.webp" value=" <?php '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>'?>">
                  <td >
                    
 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="70" width="70"/>'?>
 </td>


                </div>
              </div>
       
              <div class="form-actions">
              <input type="submit" name="submit" value="submit">
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

