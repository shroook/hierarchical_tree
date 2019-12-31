<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Lang" content="en">
        <meta name="author" content="Farzan Dalaee">
        <meta http-equiv="Reply-to" content="farzan.dalaee@gmail.com">
        <meta name="generator" content="PhpED 8.0">
        <meta name="description" content="PHP Tree View Manager (ADD - EDIT - DELETE) is php class for manage tree structures mysql tables using jquery and bootstrap">
        <meta name="keywords" content="FDTree View | TreeView | mysql tree">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

       <title></title>
    </head>
    <body>
    <div id="header">
  <h1><a href="dashboard.html">Admin</a></h1>
</div>
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
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
    
    
    </div>



        <!--    Add jQuery    -->
        <script type="text/javascript" src="jquery.js"></script>
        <!--   Add Css File     -->
        <link rel="stylesheet" type="text/css" href="FDTree.css">
        <!--   Add Font Awesome   -->
        <link rel="stylesheet" type="text/css" href="awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="awesome/css/font-awesome.css">
        <link rel="stylesheet"  href="awesome/fonts/fontawesome-webfont.svg">
        
        <?php
            include 'class.FDTree.php';
            include 'config/config.php';

            $tree = new FDTree('categories','id','title','parent_id','ajaxTree.php','images/','FDTree','Are You Sure To Delete This Node?');
            echo $tree->tree;
        ?>
        
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

    </body>
</html>