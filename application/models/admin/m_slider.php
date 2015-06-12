<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Slider extends CI_Model {

    function save_slider($name, $url) {
        $data = array(
            'name' => $name,
            'url' => $url
        );
        return $this->db->insert('slider_picture', $data);
    }

    function get_slider() {
        $this->db->select('*');
        $this->db->from('slider_picture');
        $query = $this->db->get();
        return $query->result();
    }

    function delete_slider($id) {
        $this->db->where('id_picture', $id);
        $this->db->delete('slider_picture');
    }

}
