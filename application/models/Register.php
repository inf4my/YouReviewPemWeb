<?php
class Register extends CI_Model{
	public function signup($namalengkap, $ttl, $alamat, $username, $password){
		$salt = uniqid();
		$passwordFinal = md5($password.$salt);

		$data = array(
			'username' => $username,
			'password' => $passwordFinal,
			'salt' => $salt,
			'namalengkap' => $namalengkap,
			'tanggallahir' => $ttl,
			'alamat' => $alamat
			);
		
		$this->db->insert('user', $data);
	}
}
?>