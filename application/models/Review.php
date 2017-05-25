<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Review extends CI_Model{
	#$id = "";
	#$name = "";
	#$idGame = "";
	#$score = "";
	#$reviews = "";
	#$likes = "";
	
	public function init($operName, $operIdGame, $operScore, $operReviews){
		$toAdd = array(
			'name' => $operName,
			'idgame' => $operIdGame,
			'score' => $operScore,
			'reviews' => $operReviews,
			'likes' => 0
			);
			return $toAdd;
		#$id = $operId;
		#$name = $operName;
		#$idGame = $operIdGame;
		#$score = $operScore;
		#$reviews = $operReviews;
	}
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
		$detail_review = $this->db->query('SELECT id, name,reviews,likes FROM review WHERE idgame="'.$idGame.'"');
		return $detail_review;
	}
	
	public function add_review($toBeAdded){
		$inserting = $this->db->insert('review',$toBeAdded);
	}
	
	public function add_like($id){
		echo $id;
		// $result = $this->db->query('SELECT likes FROM review WHERE idgame="'.$id.'"');
		// $like = $result->row();
		
		// $like = $like+1;
		
		// $this->db->set('likes','likes+1');
		// $this->db->where('id',$id);
		// $this->db->update('review');
	}
}
?>