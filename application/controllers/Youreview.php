<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class youreview extends CI_Controller {
	public function index()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$this->load->view('page/index', $data);
	}
	
	public function about()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$this->load->view('page/about', $data);
	}
	public function reviews()
	{
		$query = $this->db->query('SELECT * FROM game');

		$data['result'] = $query;
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$this->load->view('page/reviews', $data);
	}
	
	public function gallery()
	{
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$this->load->view('page/gallery', $data);
	}

	public function details($id)
	{
		$idGame = $id;

		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');
		$sb = $this->db->query('SELECT name,reviews,likes FROM review WHERE score=5 AND idgame="'.$idGame.'"');
		$b = $this->db->query('SELECT name,reviews,likes FROM review WHERE score=4 AND idgame="'.$idGame.'"');
		$c = $this->db->query('SELECT name,reviews,likes FROM review WHERE score=3 AND idgame="'.$idGame.'"');
		$tb = $this->db->query('SELECT name,reviews,likes FROM review WHERE score=2 AND idgame="'.$idGame.'"');
		$stb = $this->db->query('SELECT name,reviews,likes FROM review WHERE score=1 AND idgame="'.$idGame.'"');
		$res = $query->row();

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['res'] = $res;
		$data['sb'] = $sb;
		$data['b'] = $b;
		$data['c'] = $c;
		$data['tb'] = $tb;
		$data['stb'] = $stb;


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
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['res'] = $res;
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
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		//$this->load->view('page/details',$data);
		redirect(base_url('index.php/youreview/reviews'));
	}

	public function update($id)
	{
		$idGame = $id;

		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');
		$res = $query->row();
		$data['res'] = $res;

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		$this->load->helper('form');

		$this->load->view('page/update',$data);
	}

	public function update_form($id){
		$idGame = $id;

		$title = $_POST['title'];
		$genre = $_POST['genre'];
		$daterelease = $_POST['daterelease'];
		$description = $_POST['description'];
		$alson = $_POST['alson'];

		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image'))
        {
        	$conn = $this->db->query("SELECT * FROM game WHERE id='$idGame'");
        	$result = $conn->row();
        	$post = $result->image;
        }
        else
        {
			$post = $this->upload->data();
			$post = $this->upload->data('file_name');
        }

		$data = array(
			#'id' => $idGame,
			'title' => $title,
			'image' => $post,
			'genre' => $genre,
			'daterelease' => $daterelease,
			'alson' => $alson,
			'description' => $description
			);
		//$where = "id=".$idGame;
		$this->db->where('id',$id);
		//$this->db->replace('game',$data);
		$this->db->update('game',$data);
		redirect(base_url('/index.php/Youreview/details/'.$id), 'refresh');
		//echo $str;
		//redirect(base_url('index.php/youreview/'));

		//UPDATE `game` SET `description` = 'Pahlawans' WHERE `game`.`id` = 'AVE2'
	}
	
	public function delete($id)
	{
		$idGame = $id;

		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');
		$res = $query->row();
		$data['res'] = $res;
		
		#apus child row dulu
		$data = array('idgame' => $id);
		$this->db->delete('review', $data);
		
		#apus game di parent row
		$this->db->delete('game', array('id' => $id));
		redirect(base_url('/index.php/Youreview/reviews/'), 'refresh');
	}
}
