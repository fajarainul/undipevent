<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Post extends CI_Model {
	public function get_event($id=FALSE,$limit=false,$start=false)
	{
		if($id===FALSE){
			$this->db->select('*');
			$this->db->from('kegiatan_eo k');
			$this->db->join('category c','c.category_id = k.jenis_kegiatan');
			$this->db->join('profil_eo p','p.id_eo = k.id_eo');
			$this->db->limit($limit, $start);
			$this->db->where('publish',1);
			$query = $this->db->get();
			return $query->result_array();
		}
		$this->db->select('*');
		$this->db->from('kegiatan_eo k');
		$this->db->join('category c','c.category_id = k.jenis_kegiatan');
		$this->db->join('profil_eo p','p.id_eo = k.id_eo');
		$this->db->where('id_kegiatan',$id);
		$query = $this->db->get();
		return $query->row_array();
	
	}	
	
	public function record_count()
	{		
		$this->db->where('publish', 1);
		$this->db->from('kegiatan_eo');
		return $this->db->count_all_results();
		/*if($filter===false){
			return $this->db->count_all("kegiatan_eo");
		}else{
			$this->db->where('level', $filter);
			$this->db->from('user_account');
			return $this->db->count_all_results();
		}*/
		
	}
}