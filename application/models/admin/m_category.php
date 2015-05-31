<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Category extends CI_Model {
	public function get_category($id=FALSE)
	{
		if($id===FALSE){
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
	/*
	public function delete_admin($id)
	{
		$this->db->where('id_admin', $id);
		$query = $this->db->delete('db_admin');
		
		if($query){
			echo 'oke';
		}
	}*/
	
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
}