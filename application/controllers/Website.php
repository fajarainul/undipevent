<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function index()
	{
                $data['status']='1';
		$this->load->template_website('home',$data);
	}
        public function eo()
	{
                $data['status']='2';
		$this->load->template_website('eo',$data);
	}
        public function sponsor()
	{
                $data['status']='3';
		$this->load->template_website('sponsor',$data);
	}
        public function kategori()
	{
                $data['status']='1';
		$this->load->template_website('kategori',$data);
	}
        
}
