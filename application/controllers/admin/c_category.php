<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Category extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('admin/M_Category');
	}
	public function index(){
		$data['message'] = $this->session->flashdata('message');
		$data['categories'] = $this->M_Category->get_category();
		$this->load->template_admin('admin/view_categories',$data);
	}
	
	public function create(){
		//load semua yang diperlukan
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('admin/M_Category');
		
		//set rules
		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required|max_length[100]|is_unique[category.category_name]');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required|max_length[100]|is_unique[category.slug]');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->template_admin('admin/view_categories');
		}
		else
		{
			$this->M_Category->add_category();
			$this->session->set_flashdata('message', 'Category berhasil ditambahkan');
			redirect('admin/c_category/index');
		}
		
		
	}
	
}
