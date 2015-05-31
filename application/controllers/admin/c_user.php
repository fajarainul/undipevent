<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('admin/M_User');
	}
	public function index(){
		$data['message'] = $this->session->flashdata('message');
		$data['users'] = $this->M_User->get_user();
		$this->load->template_admin('admin/view_user',$data);
	}
	
	public function create(){
		//set rules
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|max_length[50]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]|max_length[20]|is_unique[user_account.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[20]|matches[confirm]|md5');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->template_admin('admin/user_create');
		}
		else
		{
			$this->M_User->add_user();
			$this->session->set_flashdata('message', 'User berhasil ditambahkan');
			redirect('admin/c_user/index');
		}
	}
}
