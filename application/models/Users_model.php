<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model{
	//save
	public function save($data){
		$this->db->insert('tbl_users', $data);
	}
	
	
	//check email
	public function email($email){
		$this->db->select('
				tbl_users.email_address
				')
				->from('tbl_users')
				->where('email_address', $email);
		$q = $this->db->get();
		if($q->num_rows == 1){
			return $q->result;
		}else{
			return false;
		}
	}
	
	
}