<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_User extends CI_Controller {
	
	public function index(){
		
		$data = '';
		$this->load->template_admin('admin/view_user',$data);
	}
	
	public function create(){
		
		$data = '';
		$this->load->template_admin('admin/user_create',$data);
	}
}
