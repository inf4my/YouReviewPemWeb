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
		<img style="width:250px;height:400px;margin-bottom: 50px;" src="<?php echo base_url('assets/images/admin.png');?>">
		</div>
		
		<div class="col-sm-5" style="margin-top:50px;">
		<?php
			echo "<h2>Welcome, ".$this->session->uName."</h2>";
		?>
		<br><br>
		
		<!--<a style='float:left;margin-left: 500px;' 
		href='<?php //echo base_url('index.php/Youreview/open_review/'.$res->id);?>' 
		class='btn btn-primary col-xs-offset-10' role='button'><span class='glyphicon glyphicon-plus-sign'
		style='margin-bottom: 5px' aria-hidden='true'></span> Review</a>
		<h2>Review</h2>-->
		
		<h2>Admin Activity</h2>
		<!-- 	<?php
				//echo "Admin Activity";
			?> -->
		<?php
		echo form_open_multipart('Youreview/addGame/', 'class="form-horizontal"');
		?>

	<div class="container">
		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Name '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'title'
		));
		?>
		</div>
		</div>

		<div class="form-group">
	    <div class="col-sm-1 control-label">
	    <?php echo form_label('Image '); ?>
	    </div>
	    <div class="col-sm-4">
	    <?php echo form_input(
	    array(
	      'type' => 'file',
	      'class' => 'form-control',
	      'name' => 'poster'
	    ));
	    ?>
	    </div>
	    </div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Genre '); ?>
		</div>
		<div class="col-sm-4">
		<?php 
		$options = array(
			//source : http://thoughtcatalog.com/jane-hurst/2015/02/12-types-of-computer-games-every-gamer-should-know-about/
			'Massively Multiplayer Online (MMO)' => ' Massively Multiplayer Online (MMO)',
			'Simulations' => 'Simulations',
			'Adventure' => 'Adventure',
			'Real-Time Strategy (RTS)' => 'Real-Time Strategy (RTS)',
			'Puzzle' => 'Puzzle',
			'Action' => 'Action',
			'Stealth Shooter' => 'Stealth Shooter',
			'Combat' => 'Combat',
			'First Person Shooters (FPS)' => 'First Person Shooters (FPS)',
			'Sports' => 'Sports',
			'Role-Playing (RPG)' => 'Role-Playing (RPG)',
			'Educational' => 'Educational'
			);
		echo form_dropdown('genre',$options,'Action',
			array('class' => 'form-control'));
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Date Release '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'date',
			'class' => 'form-control',
			'name' => 'daterelease'
		));
		?>
		</div>
		</div>
		
		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Platforms '); ?>
		</div>
		<div class="col-sm-4">
		<?php
		foreach ($alson as $key => $value) {
			$data = array(
				'name' => 'alson[]',
				'value' => $value
				);
			echo form_checkbox($data)." ".$value."<br>";
		}
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Description (max. 200 character) '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_textarea(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'description',
			'maxlength' => '200'
		));
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-5 control-label">
		<?php echo form_submit('submit','Add New Game','class="btn btn-primary"');?>
		</div>
		</div>
	</div>

		</div>
		</div>
<?php echo $footer?>
</body>
</html>