<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Profile extends CI_Controller {
	
	public function index(){
		
		$data = '';
		$this->load->template_eo('eo/view_profile',$data);
	}
	
	
	public function edit(){
		
		$data = '';
		$this->load->template_eo('eo/profile_edit',$data);
	}
	
}
