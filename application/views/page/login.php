<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<?php
	echo $scripts;
	echo $style;
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="top-banner">
	 <?php echo $banner;?>
	 <div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
</div>
	<p style="margin-top:90px;"></p>
	<?php
		echo form_open('Youreview/loginProcess/', 'class="form-horizontal"');
	?>

	<div class="container">
		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Username '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Username'
		));
		?>
		</div>
		</div>
		
		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Password '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'password',
			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => '********'
		));
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-5 control-label">
		<?php echo form_submit('submit','Login','class="btn btn-primary"');?>
		</div>
		</div>
	</div>

</body>
<?php echo $footer;?>
</html>