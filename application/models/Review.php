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
		$detail_review = $this->db->query('SELECT id, name,reviews,likes FROM review WHERE idgame="'.$idGame.'" LIMIT 5');
		return $detail_review;
	}
	
	public function get_individual_review($idGame, $userName){
		$individual_review = $this->db->query('SELECT id, name,reviews,likes FROM review WHERE idgame="'.$idGame.'"AND name="'.$userName.'"');
		return $individual_review;
	}
	
	public function add_review($toBeAdded){
		$inserting = $this->db->insert('review',$toBeAdded);
	}
	
	public function add_like($id){
		#echo $id;
		 $result = $this->db->query('SELECT likes, idgame FROM review WHERE id="'.$id.'"');
		 $row = $result->row();
		
		$jmlhLike = $row->likes;
		echo $jmlhLike;
		$jmlhLike = $jmlhLike+1;
		
		 $this->db->where('id',$id);
		 $this->db->update('review', array('likes' => $jmlhLike));
		 return $row->idgame;
	}
	public function get_specific_score($idgame, $score){
		$this->db->where(array('idgame' => $idgame, 'score' => $score));
		$this->db->from('review');
		$count = $this->db->count_all_results();
		return $count;
	}
	
	public function get_count($idGame){
		$this->db->where('idgame', $idGame);
		$this->db->from('review');
		$count = $this->db->count_all_results();
		return $count;
	}
}
?>