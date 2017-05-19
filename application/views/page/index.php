<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Game Box a Games a Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
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
<!-- header-->
<div class="top-banner">
	<?php echo $header;?>
	 <?php echo $banner;?>
</div>
	 <!-- Slider-starts-Here -->
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								<h3>Donec id diam nec ex luctus congue nec sed mi.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>Pellentesque eu ante quis elit interdum cursus.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>Fusce id urna ut felis feugiat fringilla sed quis nisl.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>


<!-- latest -->
<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Games</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
				   <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="<?php echo base_url(); ?>assets/images/v2.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="<?php echo base_url(); ?>assets/images/v1.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#"> Spiderman 2 Full Version PC Game</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="<?php echo base_url(); ?>assets/images/v3.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Sega's: Jet Set for Andriod Play Store 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				</div>
				<div class="col-md-7 trailer">
				 <iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp" frameborder="0" allowfullscreen></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>
<!-- poster -->
<div class="poster">
	 <div class="container">
		 <div class="poster-info">
			 <h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
			 <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
			 varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
			 tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam, molestie sed fermentum et, elementum at dolor</p>
			  <a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
		 </div>
	 </div>
</div>
<!-- x-box -->
<div class="x-box">
	 <div class="container">	
		 <div class="x-box_sec">
			 <div class="col-md-7 x-box-left">
				 <h2>XBOX 360</h2>
				 <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
				 <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
				 euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus. 
				 Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
				 <a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
			 </div>
			 <div class="col-md-5 x-box-right">
				 <img src="<?php echo base_url(); ?>assets/images/xbox.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<?php echo $footer?>
</body>
</html>