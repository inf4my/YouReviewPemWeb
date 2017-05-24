<?php
class Review extends CI_Model{
	public function get_all(){
		$query = $this->db->query('SELECT * FROM game');
		return $query;
	}
	
	public function get_game($idGame){
		$query = $this->db->query('SELECT * FROM game WHERE id="'.$idGame.'"');
		$game_details = $query->row();
		return $game_details;
	}
	
	public function get_detail_review($idGame){
		$detail_review = $this->db->query('SELECT name,reviews,likes FROM review WHERE idgame="'.$idGame.'"');
		return $detail_review;
	}
}
?>