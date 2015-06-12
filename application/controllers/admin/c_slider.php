<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_Slider extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/m_slider');
    }

    public function index() {

        $data['slider'] = $this->m_slider->get_slider();
        $this->load->template_admin('admin/view_slider', $data);
    }

    function create() {
        $config['upload_path'] = 'assets/images/slider/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '1024000'; // 1 M
        $numbers = range(1, 20);
        $id = shuffle($numbers);
        $config['file_name'] = 'slider' . $id;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slider')) {
            $data = array('errors' => $this->upload->display_errors());
        } else {
            $image = $this->upload->data(); //mengambil data dari slider
            $data = $image['file_name'];
            $name = $data;
            $url = 'assets/images/slider/' . $data;
            $result = $this->m_slider->save_slider($name, $url);
            if ($result)
                $data = array('infos' => 'Slider berhasil disimpan !');
            else
                $data = array('errors' => 'Slider tidak berhasil disimpan !');
        }
        $data['slider'] = $this->m_slider->get_slider();
        $this->load->template_admin('admin/view_slider', $data);
    }

    function delete() {
        if (isset($_POST['submit'])) {
            $id = $this->input->post('id_picture');
            $name = $this->input->post('name');
            $path = base_url().'assets/images/slider/'.$name;
            $this->m_slider->delete_slider($id);
            $this->load->helper("file");
            delete_files($path);
            $data['slider'] = $this->m_slider->get_slider();
            $this->load->template_admin('admin/view_slider', $data);
        }
    }

}
