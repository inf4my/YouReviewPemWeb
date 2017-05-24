<?php
class Game extends CI_Model{
	public function get_all(){
		$query = $this->db->query('SELECT * FROM game');
		return $query;
	}
}
?>