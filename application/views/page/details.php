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
		<img style="width:250px;height:400px;" src="<?php echo base_url('upload/' . $res->image);?>">
		</div>

		<div class="col-sm-5" style="margin-top:100px;">
		<?php
			echo "<h2>".$res->title."<h3 class='text-muted'>Game Details</h3></h2>";
			echo "Genre : ".$res->genre."<br>";
			echo "Released : ".$res->daterelease."<br>";
			echo "Also on : ".$res->alson."<br>";
			echo "Description : ".$res->description;
		?>
		<br><br>
		
		<a style="float:left;margin-left: 500px;" 
		href="<?php echo base_url('index.php/Youreview/open_review/'.$res->id);?>" 
		class="btn btn-primary col-xs-offset-10" role="button"><span class="glyphicon glyphicon-plus-sign"
		style="margin-bottom: 5px" aria-hidden="true"></span> Review</a>
		<h2>Review</h2>
		
		<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Punya user yang login</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        <p>Belom ada isinya coy</p>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Punya user lain</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
		<?php
        	foreach ($sb->result() as $row) {
         	echo $row->name." : <br>".$row->reviews."<br>Like : ".$row->likes."<br>";
			echo "<a href='".base_url('index.php/Youreview/addLike/'.$row->id)."'
					class='btn btn-primary' role='button'><span class='glyphicon glyphicon-thumbs-up' style='margin-bottom: 5px' aria-hidden='true'>
					</span></a>";
			echo "<br><br>";
         	} 
        ?>
        </div>
      </div>
    </div>
    <!--<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Cukup</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        	<?php
        	foreach ($c->result() as $row) {
         	echo $row->name." : <br>".$row->reviews."<br>Like : ".$row->likes."<br><br>";
         	} 
        ?>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Tidak Bagus</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
        <?php
        	foreach ($tb->result() as $row) {
         	echo $row->name." : <br>".$row->reviews."<br>Like : ".$row->likes."<br><br>";
         	} 
        ?>
        </div>
      </div>
    </div>

        <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Sangat Tidak Bagus</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
        <?php
        	foreach ($stb->result() as $row) {
         	echo $row->name." : <br>".$row->reviews."<br>Like : ".$row->likes."<br><br>";
         	} 
        ?>
        </div>
      </div>
    </div>-->

  </div> 
		</div>
		</div>
<?php echo $footer?>
</body>
</html>