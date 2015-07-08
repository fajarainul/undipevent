<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Post extends CI_Model {

    public function get_event($id = FALSE, $limit = false, $start = false) {
        $id_eo = $this->session->userdata('id_user');
        if ($id === FALSE) {
            $this->db->select('*');
            $this->db->from('kegiatan_eo k');
            $this->db->join('category c', 'c.category_id = k.jenis_kegiatan');
            $this->db->limit($limit, $start);
            $this->db->where('id_eo', $id_eo);
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('kegiatan_eo k');
        $this->db->join('category c', 'c.category_id = k.jenis_kegiatan');
        $this->db->where('id_kegiatan', $id);
        //$this->db->where('id_eo',$id_eo);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_event_filter($date, $category) {
        if ((!$date) && ($category)) {
            $query = $this->db->query("SELECT * FROM kegiatan_eo a,category b, profil_eo c WHERE a.jenis_kegiatan=b.category_id AND a.id_eo=c.id_eo AND b.category_id='$category' ");
            return $query->result();
        } else if (($date) && (!$category)) {
            $query = $this->db->query("SELECT * FROM kegiatan_eo a,category b, profil_eo c WHERE a.jenis_kegiatan=b.category_id AND a.id_eo=c.id_eo AND a.tanggal_acara='$date'");
            return $query->result();
        } else if (($date) && ($category)) {
            $query = $this->db->query("SELECT * FROM kegiatan_eo a,category b, profil_eo c WHERE a.jenis_kegiatan=b.category_id AND a.id_eo=c.id_eo AND b.category_id='$category' AND a.tanggal_acara='$date'");
            return $query->result();
        }
    }

    public function add_event() {
        $id_eo = $this->session->userdata('id_user');
        $image = $this->upload->data(); //mengambil data dari slider
        if ($this->input->post('publish') != 1) {
            $publish = 0;
        } else {
            $publish = 1;
        }
        $data = array(
            'nama_kegiatan' => $this->input->post('event_name'),
            'jenis_kegiatan' => $this->input->post('category'),
            'tanggal_acara' => $this->input->post('date'),
            'deskripsi_kegiatan' => $this->input->post('description'),
            'lokasi' => $this->input->post('location'),
            'id_eo' => $id_eo,
            'foto_kegiatan' => $image['file_name'],
            'publish' => $publish,
        );

        $this->db->insert('kegiatan_eo', $data);
    }

    public function delete_event($id) {
        $this->db->where('id_kegiatan', $id);
        $query = $this->db->delete('kegiatan_eo');

        if ($query) {
            echo 'oke';
        }
    }

    public function edit_event($id) {
        $image = $this->upload->data(); //mengambil data dari slider
        if ($this->input->post('publish') != 1) {
            $publish = 0;
        } else {
            $publish = 1;
        }
        $data = array(
            'nama_kegiatan' => $this->input->post('event_name'),
            'jenis_kegiatan' => $this->input->post('category'),
            'tanggal_acara' => $this->input->post('date'),
            'deskripsi_kegiatan' => $this->input->post('description'),
            'lokasi' => $this->input->post('location'),
            'foto_kegiatan' => $image['file_name'],
            'publish' => $publish,
        );
        $this->db->where('id_kegiatan', $id);
        $this->db->update('kegiatan_eo', $data);
    }

    public function record_count($filter = false) {
        $id_eo = $this->session->userdata('id_user');
        $this->db->where('id_eo', $id_eo);
        $this->db->from('kegiatan_eo');
        return $this->db->count_all_results();
        /* if($filter===false){
          return $this->db->count_all("kegiatan_eo");
          }else{
          $this->db->where('level', $filter);
          $this->db->from('user_account');
          return $this->db->count_all_results();
          } */
    }

    public function get_event_detail($id) {
        $query = $this->db->get_where('kegiatan_eo', array('id_kegiatan' => $id));

        return $query->row_array();
    }

    function get_categories() {
        $query = $this->db->query("SELECT category_id, category_name FROM category WHERE category_id !='0'");
        return $query->result();
    }

    function get_category_name($id) {
        $query = $this->db->query("SELECT category_name FROM category WHERE category_id='$id' AND category_id!='0'");
        return $query->row();
    }
    public function get_event_search($key) {
            $query = $this->db->query("SELECT * FROM kegiatan_eo a,category b, profil_eo c WHERE a.jenis_kegiatan=b.category_id AND a.id_eo=c.id_eo AND nama_kegiatan like '%$key%' ");
            return $query->result();
    }
}
