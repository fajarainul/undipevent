<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Category extends CI_Model {
	public function get_category($id=FALSE)
	{
		if($id===FALSE){
			$this->db->where('category_id !=',0);
			$query = $this->db->get('category');
			return $query->result_array();
		}
		$query = $this->db->get_where('category', array('category_id' => $id));
		return $query->row_array();
	}
	
	public function add_category()
	{
		$date		= getdate();
		$last_update	= $date['year'].'-'.$date['mon'].'-'.$date['mday'];
		$data = array(
				'category_name' 	=> $this->input->post('category_name'),
				'slug'		=> $this->input->post('slug'),
				'last_update'=> $last_update
		);
		
		return $this->db->insert('category', $data);
	}
	
	public function delete_category($id)
	{
		$data = array(
					'publish' => 0,
					'jenis_kegiatan' => 0
		);
		$this->db->where('jenis_kegiatan',$id);
		$this->db->update('kegiatan_eo',$data);
		
		$this->db->where('category_id', $id);
		$query = $this->db->delete('category');
		
		if($query){
			echo 'oke';
		}
	}
	
	public function edit_category($id)
	{	
		$date		= getdate();
		$last_update	= $date['year'].'-'.$date['mon'].'-'.$date['mday'];
		$data = array(
				'category_name' 	=> $this->input->post('category_name'),
				'slug'		=> $this->input->post('slug'),
				'last_update'=> $last_update
     );

		$this->db->where('category_id', $id);
		$this->db->update('category', $data); 
	}
	
	public function get_total_category($id){
		$this->db->where('jenis_kegiatan', $id);
		$this->db->from('kegiatan_eo');
		return $this->db->count_all_results();
	}
}