<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Animais extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 10,
                'usigned'        => TRUE,
                'auto_increment' => TRUE
            ],

            'codigo' => [
                'type' => 'NVARCHAR',
                'constraint' => 10
            ],

            'sisbov' => [
                'type' => 'NVARCHAR',
                'constraint' => 20
            ],

            'nome' => [
                'type'       => 'NVARCHAR',
                'constraint' => 50
            ],

            'data_nascimento' => [
                'type' => 'DATETIME'
            ],

            'sexo' => [
                'type' => 'VARCHAR',
                'constraint' => 1
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('animais');

    }

    public function down()
    {
        $this->forge->dropTable('animais');
    }
}
