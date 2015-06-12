<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Website extends CI_Model {
	public function get_category($id=FALSE)
	{
		if($id===FALSE){
			$query = $this->db->get('category');
			return $query->result_array();
		}
		$query = $this->db->get_where('category', array('category_id' => $id));
		return $query->row_array();
	}
	
	public function get_faculty(){
		$query = $this->db->get('fakultas');
		return $query->result_array();
	}
	public function get_eo($id){
		$this->db->select('*');
		$this->db->from('profil_eo');
		//jika 0 berarti tingkat universitas, jika !=0 berarti tingkat fakultas
		if($id==0){
			$this->db->where('id_tingkat',1);//1 berarti UNIVERSITAS
		}else{
			$this->db->where('id_fakultas',$id);//langsung diambil yang ada dalam fakultas
		}
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function get_faculty_name($id){
		$this->db->select('*');
		$this->db->from('fakultas');
		$this->db->where('id_fakultas',$id);//langsung diambil yang ada dalam fakultas
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function get_profile_eo($id){
		$query = $this->db->get_where('profil_eo',array('id_eo' => $id));
		return $query->row_array();
	}
	
	public function get_last_event($id){
		$query = $this->db->get_where('kegiatan_eo',array('id_eo' => $id,'publish'=>1));
		return $query->result_array();
	}
	public function get_events($id){
		$this->db->select('*');
		$this->db->from('kegiatan_eo k');
		$this->db->join('category c','c.category_id = k.jenis_kegiatan');
		$this->db->join('profil_eo p','p.id_eo = k.id_eo');
		$this->db->where('k.id_eo',$id);
		$this->db->where('publish',1);
		$query = $this->db->get();
		return $query->result_array();
	}

}

