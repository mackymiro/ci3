<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model', 'lm');
		
		
	}
	
	
	//check database
	public function check_database($password){
		$email = $this->input->post('email');
		$result = $this->lm->login($email, $password);
		if($result){
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
							'id'=>$row->id,
							'email_address'=>$row->email_address,
							);
				$this->session->set_userdata('loggedIn', $sess_array);			
			}
			return true;
		}else{
			$this->form_validation->set_message('check_database', 'Invalid Username or Password');
			return false;
		}
	}
	
	//auth
	public function auth(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', TRUE);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$sessionData = $this->session->userdata('loggedIn');
			redirect('dashboard');
		}
	}
	
	
	public function index(){
		$this->data['title'] = 'Login';
		
		$this->load->view('header', $this->data);
		$this->load->view('login_view', $this->data);
		$this->load->view('footer');
	}

}