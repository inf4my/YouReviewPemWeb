<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--banner-info-->	
	 <div class="banner-info">
		  <div class="container"">
			  <div class="logo">
					 <h1><a href="<?php echo base_url(''); ?>">GAME BOX</a></h1>
			  </div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li><a href="<?php echo base_url(''); ?>">Home</a></li>
						 <li><a href="<?php echo base_url('index.php/youreview/about'); ?>">About</a></li>
						 <li><a href="<?php echo base_url('index.php/youreview/reviews'); ?>">Reviews</a></li>
						 <li><a href="<?php echo base_url('index.php/youreview/gallery'); ?>">Gallery</a></li>
						 <?php
						 #$this->load->library('session');
						 if($this->session->has_userdata('uName')){
							 echo" <li><a href='".base_url('index.php/youreview/logout')."'>".$this->session->uName."</a></li>";
						 }
						 else{
							 echo "<li><a href='".base_url('index.php/youreview/login')."'>Login</a></li>";
							 echo "<li><a href='".base_url('index.php/youreview/signup')."'>Sign Up</a></li>";
						 }
						 ?>
				  </ul>
			 </div>	
			 <div class="clearfix"></div>
		 </div>
	 </div>