<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_profil_eo extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id_eo' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
			),
			'nama_eo' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
			'alamat' => array(
				'type' => 'text',
			),
			'telp' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'foto_eo' => array(
				'type' => 'varchar',
				'constraint' => '100',
				'null' => 'TRUE'
			),
			'id_tingkat' => array(
				'type' => 'INT',
				'constraint' => 1,
				'unsigned' => TRUE,
			),
			'id_fakultas' => array(
				'type' => 'INT',
				'constraint' => 3,
				'unsigned' => TRUE,
				'default' => 0,
				'null' => TRUE,
			),
		));
		$this->dbforge->add_key('id_eo',true);
		$this->dbforge->create_table('profil_eo');
	}

	public function down()
	{
		$this->dbforge->drop_table('profil_eo');
	}

}

?>