<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Aspect extends Migration
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
      'code'        => [
        'type'            => 'CHAR',
        'constraint'      => '1',
      ],
      'description' => [
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
    $this->forge->createTable('aspects');
  }

  public function down()
  {
    $this->forge->dropTable('aspects');
  }
}
