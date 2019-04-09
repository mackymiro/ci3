<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	
	public function index(){
		$this->data['title'] = 'Home';
		
		$this->load->view('header', $this->data);
		$this->load->view('home_view', $this->data);
		$this->load->view('footer', $this->data);
	}
}
