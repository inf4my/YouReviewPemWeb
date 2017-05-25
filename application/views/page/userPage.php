<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>YouReview <?php echo $this->session->uName?> Page</title>
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
		
		<div class="col-sm-5" style="margin-top:170px">
		<img style="width:250px;height:400px;" src="<?php echo base_url('assets/images/forhonor_samurai_mobile.jpg');?>">
		</div>
		
		<div class="col-sm-5" style="margin-top:100px;">
		<?php
			echo "<h2>Welcome, ".$this->session->uName."</h2>";
		?>
		<br><br>
		
		<!--<a style='float:left;margin-left: 500px;' 
		href='<?php //echo base_url('index.php/Youreview/open_review/'.$res->id);?>' 
		class='btn btn-primary col-xs-offset-10' role='button'><span class='glyphicon glyphicon-plus-sign'
		style='margin-bottom: 5px' aria-hidden='true'></span> Review</a>
		<h2>Review</h2>-->
		
		<h2>Recent Reviews</h2>
			<?php
				$j = 0;
				foreach($userActivity as $row){
					echo "<h3>".$titleArray[$j]."</h3>";
					for($i = 0; $i<$row->score;$i++){
						echo "<a><span class='glyphicon glyphicon glyphicon-star'
							style='margin-bottom: 5px' aria-hidden='true'></a>";
					}
					#echo "<p>".$row->score."</p>";
					echo "<p>".$row->reviews."</p>";
					echo "<p>".$row->likes."</p>";
					$j++;
				}
			?>
		</div>
		</div>
<?php echo $footer?>
</body>
</html>