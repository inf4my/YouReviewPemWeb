<?php
class User extends CI_Model{
	
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
		//echo $msg;
		return $userSession;
	}
	
	public function signup($namalengkap, $ttl, $alamat, $username, $password){
		$salt = uniqid();
		$passwordFinal = md5($password.$salt);
		//echo $passwordFinal;

		$data = array(
			'username' => $username,
			'password' => $passwordFinal,
			'salt' => $salt,
			'namalengkap' => $namalengkap,
			'tanggallahir' => $ttl,
			'alamat' => $alamat
			);
		
		$rs = $this->db->insert('user', $data);

		if($rs){
			echo "Berhasil";
		}
		else{
			echo "Gagal";
		}
	}
	
	public function show_user_activity($user){
		$user_reviews = $this->db->query('SELECT id, name,reviews,likes, idgame, score FROM review WHERE name="'.$user.'"');
		return $user_reviews->result();
	}
}
?>