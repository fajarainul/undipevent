<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends CI_Model {
	public function get_user($id=FALSE,$filter=false,$limit=false,$start=false)
	{
		if($id===FALSE){
			
			$this->db->limit($limit, $start);
			if($filter===FALSE){
				$query = $this->db->get('user_account');
			}else{
				$query = $this->db->get_where('user_account',array('level' => $filter));
			}			
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
		
		$this->db->insert('user_account', $data);
		
		$id = mysql_insert_id();
		
		if($this->input->post('level') == 1){
			$data_eo = array(
				'id_eo' => $id,
				'nama_eo' => 'New Event Organizer',
				'alamat' => 'Address',
				'telp' => 'Phone Number'
			);
			
			return $this->db->insert('profil_eo',$data_eo);
		}else{
			$data_sponsor = array(
				'id_sponsor' => $id,
				'nama_sponsor' => 'New Sponsor',
				'alamat' => 'Address',
				'telp' => 'Phone Number',				
			);
			
			return $this->db->insert('profil_sponsor',$data_sponsor);
		}
		
	}
	
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
		
	}
}