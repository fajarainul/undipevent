<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Post');
	}
	public function index(){
		
		$data['events'] = $this->M_Post->get_event();
		$this->load->template_admin('admin/index',$data);
	}
	
}
