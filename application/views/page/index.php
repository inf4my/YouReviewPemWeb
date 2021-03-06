<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>YouReview</title>
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
	 <?php echo $banner;?>
</div>
	 <!-- Slider-starts-Here -->
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								<h3>Absolutely Beautiful</h3>
								<p>The review in this website is the truth. This website really is made for the gamers, by the gamers</p>
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>The number 1 website you should visit to get reviews</h3>
								<p>-John Connor, professional gamer</p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>Blows your mind</h3>
							<p>-John Doe, highly acclaimed game critiques</p>
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>


<!-- latest -->
<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Reviews</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
						<?php
							foreach($latest->result() as $row){
								echo "<div class='sub-trailer'>
								   <div class='col-md-4 sub-img'>
										<img src='".base_url("upload/".$row->image)."' alt='img07'/>
								   </div>
								   <div class='col-md-8 sub-text'>
										 <a href='".base_url("/index.php/Youreview/details/".$row->id)."'>".$row->title."</a>
										 <p>".$row->description."</p>
								   </div>
									<div class='clearfix'> </div>
							   </div>";	
							}
						?>
				</div>
				<div class="col-md-7 trailer">
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/y1HkuGUaNBY" frameborder="0" allowfullscreen></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>
<!-- poster -->
<div class="poster">
	 <div class="container">
		 <div class="poster-info">
			 <h3>Come check out the reviews contributed by our members</h3>
			 <p>The reviews are made by the player. This website encourage you to be "judgy" (on the game of course)</p>
			  <a class="hvr-bounce-to-bottom" href="<?php echo base_url('index.php/youreview/reviews'); ?>">Read More</a>
		 </div>
	 </div>
</div>
<?php echo $footer?>
</body>
</html>