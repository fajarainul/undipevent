<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Post extends CI_Model {

    public function get_event($id = FALSE, $limit = false, $start = false) {
        if ($id === FALSE) {
            $this->db->select('*');
            $this->db->from('kegiatan_eo k');
            $this->db->join('category c', 'c.category_id = k.jenis_kegiatan');
            $this->db->join('profil_eo p', 'p.id_eo = k.id_eo');
            $this->db->limit($limit, $start);
            $this->db->where('publish', 1);
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('kegiatan_eo k');
        $this->db->join('category c', 'c.category_id = k.jenis_kegiatan');
        $this->db->join('profil_eo p', 'p.id_eo = k.id_eo');
        $this->db->where('id_kegiatan', $id);
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
    public function get_event_search($key) {
            $query = $this->db->query("SELECT * FROM kegiatan_eo a,category b, profil_eo c WHERE a.jenis_kegiatan=b.category_id AND a.id_eo=c.id_eo AND nama_kegiatan like '%$key%' ");
            return $query->result();
    }

    public function record_count() {
        $this->db->where('publish', 1);
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

    public function delete_event($id) {
				$data = array(
					'publish' => 0,
				);
        $this->db->where('id_kegiatan', $id);
        $query = $this->db->update('kegiatan_eo',$data);

        if ($query) {
            echo 'oke';
        }
    }

    function get_categories() {
        $query = $this->db->query("SELECT category_id,category_name FROM category WHERE category_id !='0'");
        return $query->result();
    }

    function get_category_name($id) {
        $query = $this->db->query("SELECT category_name FROM category WHERE category_id='$id' AND category_id!='0'");
        return $query->row();
    }

}
