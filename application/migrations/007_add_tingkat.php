<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tingkat extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id_tingkat' => array(
				'type' => 'INT',
				'constraint' => 1,
				'unsigned' => TRUE,
			),
			'nama_tingkat' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
			),
		));
		$this->dbforge->add_key('id_tingkat',true);
		$this->dbforge->create_table('tingkat');
	}

	public function down()
	{
		$this->dbforge->drop_table('tingkat');
	}

}

?>