<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('level')){
			redirect('login');
		}
	}
	public function index(){
		$data='';
		$this->load->view('forbidden_access',$data);
	}
}
