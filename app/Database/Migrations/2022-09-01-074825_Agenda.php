<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sampul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_agenda' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tgl_agenda' => [
                'type' => 'DATE',
            ],
            'datetime' => [
                'type' => 'TIME',
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'keterangan' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('agenda');
    }

    public function down()
    {
        //
    }
}
