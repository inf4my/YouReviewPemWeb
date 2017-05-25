<?php
class Login extends CI_Model{
	
	public function signin($uName, $password){
		$query = $this->db->query('SELECT username,password, salt FROM user WHERE username="'.$uName.'"');
		$row = $query->row();
		if(isset($row)){
			$pass = $password;
			$pass = $pass.$row->salt;
			if($pass===$row->password){
				$msg = "Berhasil";
			}
		}
		else{
			$msg = "Gagal";
		}
		return $msg;
	}
	
	public function blabla($username,$password){
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