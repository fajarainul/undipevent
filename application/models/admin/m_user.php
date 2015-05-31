<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {
	public function get_user($id=FALSE)
	{
		if($id===FALSE){
			$query = $this->db->get('user_account');
			return $query->result_array();
		}
		$query = $this->db->get_where('user_account', array('id_user' => $id));
		return $query->row_array();
	}
	
	public function add_user()
	{
		$data = array(
				'username' 	=> $this->input->post('username'),
				'email'		=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'level'=> $this->input->post('level')
				
		);
		
		return $this->db->insert('user_account', $data);
	}
	
	public function delete_category($id)
	{
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
}