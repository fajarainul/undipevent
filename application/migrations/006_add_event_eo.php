<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_event_eo extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id_kegiatan' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nama_kegiatan' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'jenis_kegiatan' => array(
				'type' => 'VARCHAR',
				'constraint' =>'20'
			),
			'foto_kegiatan' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'tanggal_acara' => array(
				'type' => 'DATETIME',
				'default' => '0000-00-00'
			),
			'tanggal_update' => array(
				'type' => 'TIMESTAMP',
			),
			'deskripsi_kegiatan' => array(
				'type' => 'TEXT',
			),
			'id_eo' => array(
				'type' => 'INT',
				'constraint' => 5
			),
			'lokasi' => array(
				'type' => 'TEXT',
			),
			'publish' => array(
				'type' => 'INT',
				'constraint' => 5,
				'default' => 0
			),
		));
		$this->dbforge->add_key('id_kegiatan',true);
		$this->dbforge->create_table('kegiatan_eo');
	}

	public function down()
	{
		$this->dbforge->drop_table('kegiatan_eo');
	}

}

?>