<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Post extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('level')){
			redirect('login');
		}else{
			if($this->session->userdata('level')!=1){
				redirect('forbidden');
			}
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('eo/M_Post');
		$this->load->model('admin/M_Category');
	}
	public function index(){
		$data['message'] = $this->session->flashdata('message');
		$data['total_event'] = $this->M_Post->record_count();
		$this->load->library('pagination');//library paginasi
		
		//atribut paginasi
		$config['base_url'] = site_url('eo/index/');
		$config['total_rows'] = $this->M_Post->record_count();
		$config['per_page'] = 1;
		$config['uri_segment'] = 3;
		
		$this->pagination->initialize($config);

		$start = ($this->uri->segment(3)) ? $this->uri->segment(3 ) : 0;
		
		$data['events'] = $this->M_Post->get_event($id=false,$config['per_page'], $start);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		
		$this->load->template_eo('eo/index',$data);
	}
	
	
	public function create(){
		$data['error'] = '';
		$data['categories'] = $this->M_Category->get_category();
		
		//konfigurasi untuk upload gambar
		$config['upload_path'] = './assets/admin/images/event';
		$config['allowed_types'] = 'png|jpg|jpeg';
		/*$config['max_width']		= '1300';
		$config['min_width'	]		= '1000';
		$config['min_height']		= '600';
		$config['max_height']		= '600';*/
		
		//$config['max_size'] = '2048';
		$config['file_name'] = $this->input->post('event_name');
		//load library upload
		$this->load->library('upload', $config);
		
		//set rules
		$this->form_validation->set_rules('event_name', 'Event Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->template_eo('eo/event_create',$data);
		}
		else
		{
			if (!$this->upload->do_upload('image'))
			{
				$data['error']= $this->upload->display_errors();
				$this->load->template_eo('eo/event_create',$data);
			}
			//jika upload sukses
			else
			{
				$this->M_Post->add_event();
				$this->session->set_flashdata('message', 'Event berhasil ditambahkan');
				redirect('eo/index');
			}
		}		
	}
	
	public function edit($id){
		$data['error'] = '';
		$data['categories'] = $this->M_Category->get_category();
		
		//konfigurasi untuk upload gambar
		$config['upload_path'] = './assets/admin/images/event';
		$config['allowed_types'] = 'png|jpg|jpeg';
		/*$config['max_width']		= '1300';
		$config['min_width'	]		= '1000';
		$config['min_height']		= '600';
		$config['max_height']		= '600';*/
		
		//$config['max_size'] = '2048';
		$config['file_name'] = $this->input->post('event_name');
		//load library upload
		$this->load->library('upload', $config);
		
		//set rules
		$this->form_validation->set_rules('event_name', 'Event Name', 'trim|required|max_length[100]');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		
		$data['data_edit'] = $this->M_Post->get_event($id);
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->template_eo('eo/event_edit',$data);
		}
		else
		{
			if (!$this->upload->do_upload('image'))
			{
				$data['error']= $this->upload->display_errors();
				$this->load->template_eo('eo/event_edit',$data);
			}
			//jika upload sukses
			else
			{
				$this->M_Post->edit_event($id);
				$this->session->set_flashdata('message', 'Event berhasil diedit');
				redirect('eo/index');
			}
		}
	}
	
	public function delete()
	{	
		$this->session->set_flashdata('message', 'Event berhasil dihapus...');
		$id = $this->input->post('id');
		$this->M_Post->delete_event($id);
	}
	
}
