<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'usigned'        => TRUE,
                'auto_increment' => TRUE
            ],

            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],

            'senha' => [
                'type'       => 'VARCHAR',
                'constraint' => 128
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('login');

    }

    public function down()
    {
        $this->forge->dropTable('login');
    }
}
