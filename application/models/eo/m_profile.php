<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Profile extends CI_Model {
	public function get_profile($id=FALSE)
	{
		$id=$this->session->userdata('id_user');
		$query = $this->db->get_where('profil_eo', array('id_eo' => $id));
		return $query->row_array();
	}
	/*
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
	*/
	public function edit_profile()
	{	
		$id=$this->session->userdata('id_user');
		$image= $this->upload->data();//mengambil data dari slider
		$data = array(
				'nama_eo' => $this->input->post('name'),
				'alamat' => $this->input->post('address'),
				'telp' => $this->input->post('contact'),
				'foto_eo'=> $image['file_name'],
			);
		$this->db->where('id_eo', $id);
		$this->db->update('profil_eo', $data); 
	}
	/*
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