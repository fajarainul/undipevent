<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user_account extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'id_user' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '20',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
			),
			'level' => array(
				'type' => 'INT',
				'constraint' => '1',
				'unsigned' => TRUE,
			),
			'email' => array(
				'type' => 'varchar',
				'constraint' => '50',
			),
		));
		$this->dbforge->add_key('id_user',true);
		$this->dbforge->create_table('user_account');
	}

	public function down()
	{
		$this->dbforge->drop_table('user_account');
	}

}

?>
