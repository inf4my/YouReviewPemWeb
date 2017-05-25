<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	 
		<div class="container">
		
		<div class="col-sm-5" style="margin-top:165px">
		<img style="width:250px;height:400px;" src="<?php echo base_url('upload/' . $res->image);?>">
		</div>

		<div class="col-sm-5" style="margin-top:50px;">
		<?php
			echo "<h2>".$res->title."<h3 class='text-muted'>Game Details</h3></h2>";
			echo "Genre : ".$res->genre."<br>";
			echo "Released : ".$res->daterelease."<br>";
			echo "Also on : ".$res->alson."<br>";
			echo "Description : ".$res->description;
		?>
		<br><br>
		
		<h2>Review</h2>
		<div class="container">
	<div style="margin-top:10px">
		<?php 
			echo form_open('Youreview/add_review/'.$res->id, 'class="form-horizontal"');
		?>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Rating '); ?>
		</div>
		<div class="col-sm-4">
		<?php
		echo form_radio('rating','5').'Sangat Bagus '."<br>";
        echo form_radio('rating','4',TRUE).' Bagus'."<br>";
        echo form_radio('rating','3').' Cukup'."<br>";
        echo form_radio('rating','2').' Tidak Bagus'."<br>";
        echo form_radio('rating','1').' Sangat Tidak Bagus'."<br>";
        
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Your Review '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_textarea(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'review',
			'placeholder' => 'Ketikkan review Anda disini'
		));?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label(''); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_submit('submit','Submit','class="btn btn-primary"');?>
		<?php echo '<a href="'.base_url("/index.php/Youreview/details/".$res->id).'" class="btn btn-default">Cancel</a>';?>
		</div>
		</div>
	</div>
	</div>
	</div>
		
		</div>
		</div>

<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus. 
				 Suspendisse pharetra, metus sed rutrum pretium.</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Racing</a></li>
					 <li><a href="#">Adventure</a></li>
					 <li><a href="#">Simulation</a></li>
					 <li><a href="#">Bike</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Pc</a></li>
					 <li><a href="#">Ps4</a></li>
					 <li><a href="#">XBOX 360</a></li>					 
					 <li><a href="#">XBOX ONE</a></li>
					 <li><a href="#">PSP</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a href="#">Contact Us</a></li>
					 <li><a href="#">Wish Lists</a></li>
					 <li><a href="#">Site Map</a></li>
					 <li><a href="#">Terms & Conditions</a></li>					 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2015 Game Box. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>
<!---->





</body>
</html>