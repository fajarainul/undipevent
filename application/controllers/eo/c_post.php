<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Post extends CI_Controller {
	
	public function index(){
		
		$data = '';
		$this->load->template_eo('eo/index',$data);
	}
	
}
