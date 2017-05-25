<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class youreview extends CI_Controller {

	public function index()
	{
		$this->load->model('Game');
		$new = $this->Game->get_for_index();
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['latest'] = $new;
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
		$this->load->model('Review');
		
		$result = $this->Review->get_all();

		$data['result'] = $result;
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$this->load->view('page/reviews', $data);
	}
	
	public function gallery()
	{
		$this->load->model('Game');
		$games = $this->Game->get_all();
		$data['style']= $this->load->view('includes/style', NULL, TRUE);
		$data['scripts']= $this->load->view('includes/scripts', NULL, TRUE);
		$data['banner']= $this->load->view('template/banner', NULL, TRUE);
		$data['header']= $this->load->view('template/header', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['Games'] = $games;
		$this->load->view('page/gallery', $data);
	}

	public function details($id)
	{
		$this->load->model('Review');
		
		$gameInfo = $this->Review->get_game($id);
		$likert = $this->get_likert_value($id);
		
		$reviews = $this->Review->get_detail_review($id);
		$individuReview = $this->Review->get_individual_review($id, $this->session->uName);

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['res'] = $gameInfo;
		$data['sb'] = $reviews;
		$data['individu'] = $individuReview;
		$data['likert'] = $likert;


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
		$this->load->model('Review');
		$goingToBeAdded = $this->Review->init($this->session->uName, $id, $_POST['rating'], $_POST['review']);
		$this->Review->add_review($goingToBeAdded);
		#$this->Review->add_review($goingToBeAdded);
		#$idGame = $id;

		#$nilai = $_POST['rating'];
		#$komen = $_POST['review'];
		#$nama = $_POST['name'];

		#$rev = array(
		#	'name' => $nama,
		#	'idgame' => $idGame,
		#	'score' => $nilai,
		#	'reviews' => $komen,
		#	'likes' => 0
		#	);
		#$tes = $this->db->insert('review',$rev);

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

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
			'title' => $title,
			'image' => $post,
			'genre' => $genre,
			'daterelease' => $daterelease,
			'alson' => $alson,
			'description' => $description
			);
		$this->db->where('id',$id);
		$this->db->update('game',$data);

		redirect(base_url('/index.php/Youreview/details/'.$id), 'refresh');
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

	public function signup(){
		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		$this->load->view('page/signup',$data);
	}

	public function registerProcess(){
		$namalengkap = $_POST['namalengkap'];
		$ttl = $_POST['ttl'];
		$alamat = $_POST['alamat'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		

		//$this->load->model('User');
		//$this->User->signup($namalengkap,$ttl, $alamat, $username, $password);
		//redirect(base_url($data->url), 'refresh');

	}

	public function login(){

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		$this->load->view('page/login',$data);
	}

	public function loginProcess(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$this->load->model('User');
		$res = $this->User->signin($username,$password);
		//echo $res;
		if(isset($res)){
			$this->session->set_userdata($res);
			//$data['stat'] = $_SESSION['STATUS']==1;
				echo "Selamat Datang, ".$this->session->uName;
				// redirect(base_url('/index.php/Youreview/',$data));
			redirect(base_url($data->url), 'refresh');
			//$user = $this->session->userdata('loggedin');
			
			//return isset($user);
		}
		else{
			//echo "<script> alert('Wrong Username/Password'); </script>";
			#echo "salah";			
			redirect(base_url('/index.php/Youreview/login'));
		}
	}

	public function addLike($id)//id disini itu id untuk reviewnya. Bukan id game
	{
		#$idGame = $id;
		$this->load->model('Review');
		$res = $this->Review->add_like($id);

		redirect(base_url('/index.php/Youreview/details/'.$res), 'refresh');
	}
	
	public function logout(){
		$userSession = array('uName','namaLengkap');
		$this->session->unset_userdata($userSession);
		redirect(base_url(), 'refresh');
	}
	
	public function profile($userName){
		$this->load->model('User');
		$result = $this->User->show_user_activity($userName);
		$this->load->model('Game');
		$gameTitleArray = array();
		foreach($result as $row){
			$gameTitle = $this->Game->get_specific($row->idgame);
			array_push($gameTitleArray,$gameTitle->title);
		}
		
		$whois = $this->session->uName;
		//echo $this->session->uName;

		$data['style'] = $this->load->view('includes/style', NULL, TRUE);
		$data['scripts'] = $this->load->view('includes/scripts', NULL, TRUE);
		$data['header'] = $this->load->view('template/header', NULL, TRUE);
		$data['banner'] = $this->load->view('template/banner', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		$data['userActivity'] = $result;
		$data['titleArray'] = $gameTitleArray;

		if($whois=="admin") 
		{
			//echo "yang login admin woy";
			$data['alson'] = array(
				// source : https://www.gamefaqs.com/games/systems
				'PlayStation 4' => 'PS4',
				'PSP' => 'PSP',
				'PC' => 'PC',
				'3DS' => '3DS',
				'Nintendo DS' => 'DS',
				'Wii' => 'Wii',
				'Xbox One' => 'Xbox One',
				'Xbox 360' => 'Xbox 360',
				'Nintendo Switch' => 'Nintendo Switch'
				);
			$this->load->view('page/adminPage',$data);
		}
		else
		{
			//echo "yang login bukan admin";
			$this->load->view('page/userPage',$data);
		}
	}
	public function get_likert_value($idGame){
		$this->load->model('Review');
		$count = $this->Review->get_count($idGame);
		$jmlhScore5 = $this->Review->get_specific_score($idGame, 5);
		$jmlhScore4 = $this->Review->get_specific_score($idGame, 4);
		$jmlhScore3 = $this->Review->get_specific_score($idGame, 3);
		$jmlhScore2 = $this->Review->get_specific_score($idGame, 2);
		$jmlhScore1 = $this->Review->get_specific_score($idGame, 1);
		$score5 = $jmlhScore5*5;
		$score4 = $jmlhScore4*4;
		$score3 = $jmlhScore3*3;
		$score2 = $jmlhScore2*2;
		$score1 = $jmlhScore1*1;
		$sum = $score1+ $score2+ $score3+ $score4+ $score5;
		$Y = 5* $count;
		$X = 1* $count;
		if($Y==0 || $X == 0 ){
			$finalResult = 0;
		}
		else{
			$finalResult =  $sum / $Y * 100;
		}
		#$operan = array(
	#				'jmlhResponden' => $count,
	#				'score5' => $score5,
	#				'score4' => $score4,
	#				'score3' => $score3,
	#				'score2' => $score2,
	#				'score1' => $score1
	#	);
		
		return $finalResult;
		#$data['jmlhResponden'] = $count;
		#$data['score5'] = $score5;
		#$data['score4'] = $score4;
		#$data['score3'] = $score3;
		#$data['score2'] = $score2;
		#$data['score1'] = $score1;
		#$data['hasil'] = $finalResult;
		#$this->load->view('welcome_message', $data);
	}

	public function addGame()
	{
		$title = $_POST['title'];
		$config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = '2000'; //2000Kb = 2MB

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('poster'))
        {
            echo $this->upload->display_errors();
        }
        else
        {
			$post = $this->upload->data();
        }

		$post = $this->upload->data('file_name');
		//echo $post;

		$genre = $_POST['genre'];
		$daterelease = $_POST['daterelease'];
		$pl = $_POST['alson'];
		$str = '';
		//$size = count($pl);
		//echo $size;
		foreach ($pl as $pltf) {
			//echo $pltf.", ";
			// $str .= $pltf;
			// if($pltf < $size){
			// 	$str .= ", ";
			// }
			$str .= $pltf.', ';
			
		}
		$str = rtrim($str, ',');
		//echo $str;
		$description = $_POST['description'];
		
		$this->load->model('Game');
		$this->Game->addnewgame($title, $post, $genre, $daterelease, $str, $description);
	}
}