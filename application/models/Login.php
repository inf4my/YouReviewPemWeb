<?php
class Login extends CI_Model{
	public function signin($username,$password){
		$query = $this->db->query('SELECT username,password FROM user WHERE username="'.$username.'" AND password="'.$password.'"');
		$row = $query->row();
		if(isset($row)){
			$msg = "Berhasil";
		}
		else{
			$msg = "Gagal";
		}
		return $msg;
	}
}
?>