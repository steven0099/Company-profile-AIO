<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHeroSlidesTable extends Migration
{
    public function up()
    {
        // Define the fields for the hero_slides table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'slide_order' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => null,
            ],
        ]);

        // Define the primary key
        $this->forge->addKey('id', true);

        // Create the table
        $this->forge->createTable('hero_slides');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('hero_slides');
    }
}
