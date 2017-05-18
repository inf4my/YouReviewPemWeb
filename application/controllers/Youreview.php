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
		$query = $this->db->query('SELECT * FROM game');

		$this->load->helper('url');

		$data['result'] = $query;
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

	public function details($id)
	{
		$idGame = $id;

		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');

		$res = $query->row();

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['res'] = $res;

		$this->load->view('page/details',$data);
	}

	public function open_review($id)
	{
		$idGame = $id;

		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');

		$res = $query->row();

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['res'] = $res;
		$this->load->helper('form');
		$this->load->view('page/form',$data);
	}

	public function add_review($id)
	{
		$idGame = $id;
		//echo $idGame;

		$nilai = $_POST['rating'];
		$komen = $_POST['review'];
		$nama = $_POST['name'];

		$rev = array(
			'name' => $nama,
			'idgame' => $idGame,
			'score' => $nilai,
			'reviews' => $komen,
			'likes' => 0
			);
		$tes = $this->db->insert('review',$rev);

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);

		//$this->load->view('page/details',$data);
		redirect(base_url('index.php/youreview/reviews'));
	}
}
