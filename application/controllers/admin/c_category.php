<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Category extends CI_Controller {
	
	public function index(){
		
		$data = '';
		$this->load->template_admin('admin/view_categories',$data);
	}
	
}
