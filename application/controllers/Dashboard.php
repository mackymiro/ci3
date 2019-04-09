<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
	}
	
	
	
	public function index(){
		$this->data['title'] = 'Dashboard';
		
		$this->load->view('header', $this->data);
		$this->load->view('dashboard_view');
		$this->load->view('footer');
	}
	
}