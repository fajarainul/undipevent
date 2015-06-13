<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/m_slider');
        $this->load->model('m_website1');
        $this->load->model('admin/M_Category');
    }

    public function index() {
        $data['status'] = '1';
        $waktu_sekarang = date('d-m-Y');
        $data['event_terdekat'] = $this->m_website1->event_terdekat($waktu_sekarang);
        $data['recent_update'] = $this->m_website1->recent_update();
        $data['slider'] = $this->m_slider->get_slider();
        $data['categories'] = $this->M_Category->get_category();
        $this->load->template_website('home', $data);
    }

    public function login() {
        $data['status'] = '1';
        $this->load->view('login', $data);
    }

    public function eo() {
        $data['status'] = '2';
        $this->load->template_website('eo', $data);
    }

    public function eo_detail() {
        $data['status'] = '2';
        $this->load->template_website('eo_detail', $data);
    }

    public function profil_eo() {
        $data['status'] = '2';
        $this->load->template_website('profil_eo', $data);
    }

    public function sponsor() {
        $data['status'] = '3';
        $this->load->template_website('sponsor', $data);
    }

    public function profil_sponsor() {
        $data['status'] = '3';
        $this->load->template_website('profil_sponsor', $data);
    }

    public function kategori() {
        $data['status'] = '1';
        $this->load->template_website('kategori', $data);
    }

    public function detail() {
        $data['status'] = '1';
        $this->load->template_website('detail_event', $data);
    }

    public function event_eo() {
        $this->load->template_website('event_eo');
    }

}
