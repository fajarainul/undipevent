<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_fakultas extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id_fakultas' => array(
				'type' => 'INT',
				'constraint' => 3,
				'unsigned' => TRUE,
			),
			'nama_fakultas' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('id_fakultas',true);
		$this->dbforge->create_table('fakultas');
	}

	public function down()
	{
		$this->dbforge->drop_table('fakultas');
	}

}

?>