<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_profil_sponsor extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
				'id_sponsor' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
			),
			'nama_sponsor' => array(
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
			'foto_sponsor' => array(
				'type' => 'varchar',
				'constraint' => '100',
				'nullabel' => 'TRUE'
			),
			'jumlah_bantuan' => array(
				'type' => 'varchar',
				'constraint' => '20',
				'default' => 'TRUE',
			),
			'jenis_bantuan' => array(
				'type' => 'varchar',
				'constraint' => '100',
				'nullabel' => 'TRUE'
			),
			'prosedur' => array(
				'type' => 'TEXT',
			),
		));
		$this->dbforge->add_key('id_sponsor',true);
		$this->dbforge->create_table('profil_sponsor');
	}

	public function down()
	{
		$this->dbforge->drop_table('profil_sponsor');
	}

}

?>