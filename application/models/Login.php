<?php
class Login extends CI_Model{
	
	public function signin($uName, $password){
		$query = $this->db->query('SELECT username,password, salt, namalengkap FROM user WHERE username="'.$uName.'"');
		$row = $query->row();
		if(isset($row)){
			$pass = $password;
			$pass = $pass.$row->salt;
			if(strcmp($pass,$row->password)){
				$msg = "Berhasil";
				$userSession = array(
					'uName' => $row->username,
					'namaLengkap' => $row->namalengkap
				);
			}
		}
		else{
			$msg = "Gagal";
		}
		return $userSession;
	}
	
	#public function signin($username,$password){
	#	$query = $this->db->query('SELECT username,password FROM user WHERE username="'.$username.'" AND password="'.$password.'"');
	#	$row = $query->row();
	#	if(isset($row)){
	#		$msg = "Berhasil";
	#	}
	#	else{
	#		$msg = "Gagal";
	#	}
	#	return $msg;
	#}
}
?>