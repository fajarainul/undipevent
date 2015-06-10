<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('level')){
			redirect('login');
		}else{
			if($this->session->userdata('level')!=2){
				redirect('forbidden');
			}
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('sponsor/M_Profile');
	}
	public function index(){
		$data['message'] = $this->session->flashdata('message');
		$data['data_profile'] = $this->M_Profile->get_profile();
		$this->load->template_sponsor('sponsor/view_profile',$data);
	}
	
	public function edit(){
		$data['error'] = '';
		
		//konfigurasi untuk upload gambar
		$config['upload_path'] = './assets/admin/images/profile/sponsor';
		$config['allowed_types'] = 'png|jpg|jpeg';
		/*$config['max_width']		= '1300';
		$config['min_width'	]		= '1000';
		$config['min_height']		= '600';
		$config['max_height']		= '600';*/
		
		//$config['max_size'] = '2048';
		$config['file_name'] = $this->input->post('name');
		//load library upload
		$this->load->library('upload', $config);
		
		//set rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[50]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('contact', 'Location', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('type', 'Type', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('procedure', 'Procedure', 'trim|required');
		
		$data['data_profile'] = $this->M_Profile->get_profile();
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->template_sponsor('sponsor/profile_edit',$data);
		}
		else
		{
			if (!$this->upload->do_upload('image'))
			{
				$data['error']= $this->upload->display_errors();
				$this->load->template_eo('sponsor/profile_edit',$data);
			}
			//jika upload sukses
			else
			{
				$this->M_Profile->edit_profile();
				$this->session->set_flashdata('message', 'Profile berhasil diedit');
				redirect('sponsor/index');
			}
		}

		
	}
	
}
