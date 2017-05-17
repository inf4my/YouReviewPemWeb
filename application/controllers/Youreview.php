<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class youreview extends CI_Controller {
	public function index()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('includes/scripts', NULL, TRUE);
		$this->load->view('page/index', $data);
	}
}
