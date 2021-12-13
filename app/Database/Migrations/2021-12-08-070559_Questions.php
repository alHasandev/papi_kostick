<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Questions extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'            => 'INT',
        'constraint'      => 11,
        'unsigned'        => true,
        'auto_increment'  => true,
      ],
      'a_code'        => [
        'type'            => 'CHAR',
        'constraint'      => '1',
      ],
      'a_declaration' => [
        'type'            => 'TEXT',
      ],
      'b_code'        => [
        'type'            => 'CHAR',
        'constraint'      => '1',
      ],
      'b_declaration' => [
        'type'            => 'TEXT',
      ],
      'created_at'  => [
        'type'            => 'DATETIME',
        'null'            => TRUE,
      ],
      'updated_at'  => [
        'type'            => 'DATETIME',
        'null'            => TRUE,
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('questions');
  }

  public function down()
  {
    $this->forge->dropTable('questions');
  }
}
