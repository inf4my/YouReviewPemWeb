<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Game Box a Games a Category Flat Bootstarp Responsive Website Template | About :: w3layouts</title>
<?php
	echo $scripts;
	echo $style;
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Box  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

</head>
<body>
<!-- header -->
<?php echo $header; ?>
<!--banner-info-->	
<?php echo $banner; ?>
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!-- content -->
<div class="review">
	 
		 <h2 >Reviews</h2>
		 <div class='container'>
			<div class="row">
		 		<?php
		 		
		 			foreach ($result->result() as $row) {
		 				echo "
		 			<div class='review-md1'>
		 			<div class='col-md-4 sed-md'>
				 	 <div class='col-1'>
						 <a href='single.html'>
						 <img class='img-responsive'
						 src='".base_url("upload/".$row->image)."' 
						 >
						 </a>
					 	<h4><a href='single.html'>$row->title</a></h4>
						<p>$row->description</p>
						<a href='".base_url("/index.php/Youreview/details/".$row->id)."' class='btn btn-primary'><span class='glyphicon glyphicon-eye-open'></span></a>
						<a href='".base_url("/index.php/Youreview/update/".$row->id)."' class='btn btn-primary'><span class='glyphicon glyphicon-edit'></span></a>
						<a href='".base_url("/index.php/Youreview/delete/".$row->id)."' class='btn btn-primary'><span class='glyphicon glyphicon-trash'></span></a>
					 </div>
				 	</div>
					</div>
				 	 ";
		 			}
		 		?>
		 		<div class='clearfix'> </div>
		 		</div>
		</div>
</div>
<?php echo $footer?>
</body>
</html>