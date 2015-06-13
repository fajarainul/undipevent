<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Website');
		$this->load->model('admin/m_slider');
    $this->load->model('m_website1');
	}
	public function index()
	{
               $data['status']='1';
		$data['recent_update'] = $this->m_website1->recent_update();
    //$data['slider'] = $this->m_slider->get_slider();
		$data['categories'] = $this->M_Website->get_category();
		$this->load->template_website('home',$data);
	}
         public function login()
	{
                $data['status']='1';
		$this->load->view('login',$data);
	}
        public function eo()
	{
                $data['status']='2';
		$data['data_faculty'] = $this->M_Website->get_faculty();
		//print_r($data['data_faculty']);die();
		$this->load->template_website('eo',$data);
	}
        public function eo_detail($id)
	{
                $data['status']='2';
		$data['data_eo'] = $this->M_Website->get_eo($id);
		if($id==0){
			//jika 0 berarti UNDIP
			$data['nama_tingkat_eo'] = 'Universitas Diponegoro';
		}else{
			//berarti ambil nama fakultas
			$data['nama_tingkat_eo'] = $this->M_Website->get_faculty_name($id);
		}
		$this->load->template_website('eo_detail',$data);
	}
         public function profil_eo($id)
	{
                $data['status']='2';
		$data['data_last_event'] = $this->M_Website->get_last_event($id);
		$data['profile_eo'] = $this->M_Website->get_profile_eo($id);
		$this->load->template_website('profil_eo',$data);
	}
        public function sponsor()
	{
                $data['status']='3';
		$data['sponsors'] = $this->M_Website->get_sponsors();
		$this->load->template_website('sponsor',$data);
	}
        public function profil_sponsor($id)
	{
                $data['status']='3';
		$data['sponsor'] = $this->M_Website->get_sponsor($id);
		$this->load->template_website('profil_sponsor',$data);
	}
        public function kategori()
	{
                $data['status']='1';
		$this->load->template_website('kategori',$data);
	}
        public function detail($id)
	{
                $data['status']='1';
		$data['recent_update'] = $this->m_website1->recent_update();
		$data['data_event'] = $this->M_Website->get_event_detail($id);
		$this->load->template_website('detail_event',$data);
	}
        public function event_eo($id)
    {
				$data['categories'] = $this->M_Website->get_category();
				$data['events'] = $this->M_Website->get_events($id);
				$data['profile_eo'] = $this->M_Website->get_profile_eo($id);
        $this->load->template_website('event_eo',$data);
    }

}
