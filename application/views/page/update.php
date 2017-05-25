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
<div class="container">
  <div style="margin-top:10px">
  <h2>YouReview</h2>
  <h3 class="text-muted">Update Game</h3>
  <?php 
  echo form_open_multipart('Youreview/update_form/'.$res->id, 'class="form-horizontal"');
  ?>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Title '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_input(
    array(
      'type' => 'text',
      'class' => 'form-control',
      'name' => 'title',
      'value' => $res->title
    ));
    ?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Genre '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_input(
    array(
      'type' => 'text',
      'class' => 'form-control',
      'name' => 'genre',
      'value' => $res->genre
    ));?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Date Release '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_input(
    array(
      'type' => 'date',
      'class' => 'form-control',
      'name' => 'daterelease',
      'value' => $res->daterelease
    ));
    ?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Description '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_textarea(
    array(
      'type' => 'text',
      'class' => 'form-control',
      'name' => 'description',
      'value' => $res->description
    ));?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Also on '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_input(
    array(
      'type' => 'text',
      'class' => 'form-control',
      'name' => 'alson',
      'value' => $res->alson
    ));
    ?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('Current Image '); ?>
    </div>
    <div class="col-sm-4">
    <img src="<?php echo base_url('upload/').$res->image; ?>" height="450" width="300"> 
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label('New Image '); ?>
    </div>
    <div class="col-sm-4">
    <?php echo form_input(
    array(
      'type' => 'file',
      'class' => 'form-control',
      'name' => 'image'
    ));
    ?>
    </div>
    </div>

    <div class="form-group">
    <div class="col-sm-3 control-label">
    <?php echo form_label(''); ?>
    </div>
    <div class="col-sm-4">
    <?php echo '<button href="'.base_url("/index.php/Youreview/update_form/").$res->id.'" type="submit" class="btn btn-primary"value="submit"> Submit</button>'?>
    <?php echo '<a href="'.base_url("/index.php/Youreview/").'" class="btn btn-default">Cancel</a>';?>
    </div>
    </div>
  </div>
  </div>

<!-- footer -->
<?php
  echo $footer;
?>





</body>
</html>