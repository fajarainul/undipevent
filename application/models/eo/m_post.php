<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Post extends CI_Model {
	public function get_event($id=FALSE,$limit=false,$start=false)
	{
		if($id===FALSE){
			$this->db->select('*');
			$this->db->from('kegiatan_eo k');
			$this->db->join('category c','c.category_id = k.jenis_kegiatan');
			$query = $this->db->get();
			return $query->result_array();
		}
		$this->db->select('*');
		$this->db->from('kegiatan_eo k');
		$this->db->join('category c','c.category_id = k.jenis_kegiatan');
		$query = $this->db->where('id_kegiatan',$id);
		return $query->row_array();
	
	}	
	
	public function add_event()
	{
		$image= $this->upload->data();//mengambil data dari slider
		if($this->input->post('publish')!=1){
			$publish = 0;
		}else{
			$publish = 1;
		}
		$data = array(
				'nama_kegiatan' 	=> $this->input->post('event_name'),
				'jenis_kegiatan'		=> $this->input->post('category'),
				'tanggal_acara'=> $this->input->post('date'),
				'deskripsi_kegiatan'=> $this->input->post('description'),
				'lokasi'=> $this->input->post('location'),
				'id_eo'=> 1,//$this->input->post('level'),
				'foto_kegiatan'=> $image['file_name'],
				'publish' => $publish,
		);
		
		$this->db->insert('kegiatan_eo', $data);		
	}
	/*
	public function delete_user($id)
	{
		$this->db->where('id_user', $id);
		$query = $this->db->delete('user_account');
		
		if($query){
			echo 'oke';
		}
	}
	
	public function edit_user($id)
	{	
		$data = array(
				'username' 	=> $this->input->post('username'),
				'email'		=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'level'=> $this->input->post('level')
				
		);
		$this->db->where('id_user', $id);
		$this->db->update('user_account', $data); 
	}
	
	public function record_count($filter=false)
	{
		if($filter===false){
			return $this->db->count_all("user_account");
		}else{
			$this->db->where('level', $filter);
			$this->db->from('user_account');
			return $this->db->count_all_results();
		}
		
	}*/
}