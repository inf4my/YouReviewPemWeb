<?php
class Game extends CI_Model{
	public function get_all(){
		$query = $this->db->query('SELECT * FROM game');
		return $query;
	}
	
	public function get_specific($idDariReview){
		$query = $this->db->query('SELECT title FROM game WHERE id ="'.$idDariReview.'" ');
		return $query->row();
	}
}
?>