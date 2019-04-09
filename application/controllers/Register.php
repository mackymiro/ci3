<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model', 'um');
	}
	
	//check email
	public function check_email(){
		$email = $this->input->post('email');
		$result = $this->um->email($email);
		if($result){
			$this->form_validation->set_message('check_email', 'Email Already Exists.');
			return false;
		}else{
			return true;
		}
		
	}
	
	//add
	public function add(){
		$this->form_validation->set_rules('firstName', 'First Name', 'trim|required', TRUE);
		$this->form_validation->set_rules('lastName', 'Last Name', 'trim|required', TRUE);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email', TRUE);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', TRUE);
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$pwd = $this->input->post('password');
			$sha1 = sha1($pwd);
			$array = array(
					'first_name'=>$this->input->post('firstName'),
					'last_name'=>$this->input->post('lastName'),
					'email_address'=>$this->input->post('email'),
					'password'=>$sha1
					);
			$this->um->save($array);
			$this->session->set_flashdata('succReg', 1);
			redirect('register');
		}
	}
	
	public function index(){
		$this->data['title'] = 'Register';
		
		$this->load->view('header', $this->data);
		$this->load->view('register_view', $this->data);
		$this->load->view('footer', $this->data);
	}
}
