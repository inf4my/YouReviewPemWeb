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
		$query = $this->db->query('SELECT title FROM game WHERE id ="'.$idDariReview.'" ');
		return $query->row();
	}
}
?>