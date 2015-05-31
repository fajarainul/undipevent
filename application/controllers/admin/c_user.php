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
		
		$this->load->library('pagination');//library paginasi
		
		//atribut paginasi
		$config['base_url'] = site_url('admin/user/');
		$config['total_rows'] = $this->M_User->record_count();
		$config['per_page'] = 1;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);

		$start = ($this->uri->segment(3)) ? $this->uri->segment(3 ) : 0;
		$data['users'] = $this->M_User->get_user($id=false,$config['per_page'], $start);
    // echo $start;return;
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		
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
	
	public function edit($id){
		//set rules
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|max_length[50]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]|max_length[20]|is_unique[user_account.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[20]|matches[confirm]|md5');
		$this->form_validation->set_rules('confirm', 'Password Confirmation', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['data_edit'] = $this->M_User->get_user($id);
			$this->load->template_admin('admin/user_edit',$data);
		}
		else
		{
			$this->M_User->edit_user($id);
			$this->session->set_flashdata('message', 'User berhasil diedit');
			redirect('admin/c_user/index');
		}
	}
	
	public function delete()
	{	
		$this->session->set_flashdata('message', 'User berhasil dihapus...');
		$id = $this->input->post('id');
		$this->M_User->delete_user($id);
	}
}
