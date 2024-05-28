<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('user')->insertBatch([
            [
                'nume'=> 'Elena',
                'parola'=>password_hash('elena',PASSWORD_DEFAULT)
            ],
            [
                'nume'=> 'Matei',
                'parola'=>password_hash('matei',PASSWORD_DEFAULT)
            ]
        ]);
    }
}
