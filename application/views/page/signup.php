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
</head>
<body>
	<?php echo $banner; ?>
	<div class="banner">		  			
		<div class="bnr2">						  
	   </div>
	<p style="margin-top:90px;"></p>
	<?php
		echo form_open('Youreview/registerProcess/', 'class="form-horizontal"');
	?>

	<div class="container">
		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Nama Lengkap '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'namalengkap',
			'placeholder' => 'Nama Lengkap'
		));
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Tempat, Tanggal Lahir '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'date',
			'class' => 'form-control',
			'name' => 'ttl'
		));
		?>
		</div>
		</div>

		<div class="form-group">
		<div class="col-sm-1 control-label">
		<?php echo form_label('Alamat '); ?>
		</div>
		<div class="col-sm-4">
		<?php echo form_input(
		array(
			'type' => 'text',
			'class' => 'form-control',
			'name' => 'alamat'
		));
		?>
		</div>
		</div>

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
		<?php echo form_submit('submit','Register','class="btn btn-primary"');?>
		</div>
		</div>
	</div>

	<?php
	echo $footer;
	?>
</body>
</html>