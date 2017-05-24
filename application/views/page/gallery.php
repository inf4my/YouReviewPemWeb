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
<div class="gallery">
		<div class="container">
			<h2>Gallery</h2>
			<div class="gallery-bottom">
				<div class="gallery-1">
				<?php
				foreach($Games->result() as $row){
						echo "<div class='col-md-3 gallery-grid'>
						<a class='example-image-link'
						href='".base_url("/index.php/Youreview/details/".$row->id)."' data-lightbox='example-set' 
						data-title='Click the right half of the image to move forward.'>
						<img style='height:500px;width:300px' class='example-image' src='".base_url("upload/".$row->image)."' alt=''/></a>
						</div>";
				}
				?>
					<!--<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/r4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl7.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl5.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl6.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl2.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/r6.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl7.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="gallery-1">
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/r3.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/r4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/r4.jpg" alt=""/></a>
					</div>
					<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/gl11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo base_url(); ?>assets/images/gl11.jpg" alt=""/></a>
					</div>
					<div class="clearfix"></div>
				</div>-->
				
		 </div>
	 </div>
</div>	
<?php echo $footer?>
</body>
</html>