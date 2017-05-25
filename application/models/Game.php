<?php
class Game extends CI_Model{
	public function get_all(){
		$query = $this->db->query('SELECT * FROM game');
		return $query;
	}
	public function get_for_index(){
		$this->db->order_by('daterelease', 'DESC');
		$query = $this->db->get('game', 3);
		#$query = $this->db->query('SELECT title, image, daterelease, description FROM game LIMIT 3');
		#$query = $this->db->order_by('daterelease', 'DESC');
		return $query;
	}
	
	public function get_specific($idDariReview){
		$query = $this->db->query('SELECT title, image FROM game WHERE id ="'.$idDariReview.'" ');
		return $query->row();
	}

	public function addnewgame($title, $post, $genre, $daterelease, $alson, $description)
	{
		$result = $this->db->query('SELECT * FROM game');
		$rows = $result->num_rows();
		//echo $rows;

		//echo $title;
		//echo substr($title, 2, 3);
		$length = strlen($title);
		$idG = substr(strtoupper($title), $length-2, 3).$rows*rand(1,9);
		//echo $idG;
		//echo $alson;
		$data = array(
			'id' => $idG,
			'title' => $title,
			'image' => $post,
			'genre' => $genre,
			'daterelease' => $daterelease,
			'alson' => $alson,
			'description' => $description
			);
		$rst = $this->db->insert('game', $data);

		if($rst)
		{
			//echo "Yeayy berhasil";
			echo "<script> alert('New game has been added') </script>";
		}
		else
		{
			//echo "Hmm, coba lagi men";
			echo "<script> alert('Failed to add game') </script>";
		}
		
	}
}
?>