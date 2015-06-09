<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('sponsor/M_Profile');
	}
	public function index(){
		$data['message'] = $this->session->flashdata('message');
		$data['data_profile'] = $this->M_Profile->get_profile();
		$this->load->template_sponsor('sponsor/view_profile',$data);
	}
	
	
	
}
