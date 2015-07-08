<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
				if(!$this->session->userdata('logged_in')){
					redirect('login');
				}else{
					if($this->session->userdata('level')!=0){
						redirect('forbidden');
					}
				}
        $this->load->model('admin/M_Post');
    }

    public function index() {
        $data['total_event'] = $this->M_Post->record_count();


        $this->load->library('pagination'); //library paginasi
        //atribut paginasi
        $config['base_url'] = site_url('admin/index/');
        $config['total_rows'] = $this->M_Post->record_count();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['events'] = $this->M_Post->get_event($id = false, $config['per_page'], $start);
        $data['categories'] = $this->M_Post->get_categories();
        // echo $start;return;
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);

        $this->load->template_admin('admin/index', $data);
    }

    public function event_detail() {
        $id = $this->input->post('id');
        $data = $this->M_Post->get_event_detail($id);


        //print_r($data);die();
        print json_encode($data);
    }

    public function delete_event() {
        $this->session->set_flashdata('message', 'Event berhasil dihapus...');
        $id = $this->input->post('id');
        $this->M_Post->delete_event($id);
    }

    public function filter() {
        if (isset($_POST['submit'])) {
            if ((!$this->input->post('date')) && (!$this->input->post('category'))) {
                $data['total_event'] = $this->M_Post->record_count();


                $this->load->library('pagination'); //library paginasi
                //atribut paginasi
                $config['base_url'] = site_url('admin/index/');
                $config['total_rows'] = $this->M_Post->record_count();
                $config['per_page'] = 10;
                $config['uri_segment'] = 3;

                $this->pagination->initialize($config);

                $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

                $data['events'] = $this->M_Post->get_event($id = false, $config['per_page'], $start);
                $data['categories'] = $this->M_Post->get_categories();
                // echo $start;return;
                $str_links = $this->pagination->create_links();
                $data["links"] = explode('&nbsp;', $str_links);

                $this->load->template_admin('admin/index', $data);
            } else {
                $date = $this->input->post('date');
                $data['date'] = $date;
                $category = $this->input->post('category');
                //$data['category']=$category;
                if($category=='') $data['category']='';
                else $data['category']=$this->M_Post->get_category_name($category)->category_name;
                $data['events'] = $this->M_Post->get_event_filter($date, $category);
                $data['categories'] = $this->M_Post->get_categories();
                $this->load->template_admin('admin/filter', $data);
            }
        }
    }
    public function search() {
        if (isset($_POST['submit'])) {
                $key = $this->input->post('key');
                $data['key'] = $key;
                $data['events'] = $this->M_Post->get_event_search($key);
                $data['categories'] = $this->M_Post->get_categories();
                $this->load->template_admin('admin/search', $data); 
        }
    }

}
