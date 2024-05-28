<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateImagine extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pantofi', [
            'imagine' => [
                'type'=>'VARCHAR',
                'constraint'=>250
            ], 
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pantofi', 'imagine');
    }
}
