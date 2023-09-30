<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Job extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'companyName' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jobTitle' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jobLocation' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jobDescription' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            
        
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('job');
    }

    public function down()
    {
        //
    }
}