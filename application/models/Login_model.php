<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	
	//check login
	public function login($email, $password){
		$sha_password = sha1($password);
		$this->db->select(
					'tbl_users.id,
					tbl_users.email_address,
					tbl_users.password'
					)
				->from('tbl_users')
				->where('tbl_users.email_address', $email)
				->where('tbl_users.password', $sha_password);
		$query = $this->db->get();
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
}