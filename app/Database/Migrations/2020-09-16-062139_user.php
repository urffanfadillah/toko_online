<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			// id
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			// username
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			// password
			'password' => [
				'type' => 'TEXT',
			],
			// salt
			'salt' => [
				'type' => 'TEXT'
			],
			// avatar
			'avatar' => [
				'type' => 'TEXT',
				'null' => TRUE
			],
			// role
			'role' => [
				'type' => 'INT',
				'constraint' => 1,
				'default' => 1
			],
			// created by
			'created_by' => [
				'type' => 'INT',
				'constraint' => 11
			],
			// created date
			'created_date' => [
				'type' => 'DATETIME'
			],
			// updated by
			'updated_by' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE
			],
			// updated date
			'updated_date' => [
				'type' => 'DATETIME',
				'null' => TRUE
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('user');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		// drop table user
		$this->forge->dropTable('user');
	}
}
