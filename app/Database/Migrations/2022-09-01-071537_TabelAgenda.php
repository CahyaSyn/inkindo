<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelAgenda extends Migration
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
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'waktu' => [
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
        $this->forge->createTable('tabel_agenda');
    }

    public function down()
    {
        //
    }
}
