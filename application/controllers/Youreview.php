<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class youreview extends CI_Controller {
	public function index()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$this->load->view('page/index', $data);
	}
	
	public function about()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$this->load->view('page/about', $data);
	}
	public function reviews()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$this->load->view('page/reviews', $data);
	}
	
	public function gallery()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$this->load->view('page/gallery', $data);
	}
}
