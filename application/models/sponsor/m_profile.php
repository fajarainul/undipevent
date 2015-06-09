<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Profile extends CI_Model {
	public function get_profile($id=FALSE)
	{
		$id=2;
		$query = $this->db->get_where('profil_sponsor', array('id_sponsor' => $id));
		return $query->row_array();
	}
	
	public function edit_profile()
	{	
		$image= $this->upload->data();//mengambil data dari slider
		$data = array(
				'nama_sponsor' => $this->input->post('name'),
				'alamat' => $this->input->post('address'),
				'telp' => $this->input->post('contact'),	
				'jumlah_bantuan' => $this->input->post('amount'),	
				'jenis_bantuan' => $this->input->post('type'),	
				'prosedur' => $this->input->post('procedure'),
				'foto_sponsor'=> $image['file_name'],
			);
		$this->db->where('id_sponsor', 2);
		$this->db->update('profil_sponsor', $data); 
	}
}