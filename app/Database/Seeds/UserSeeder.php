<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'name_user' => 'Administrator',
            'email_user' => 'dev.kelompok2@gmail.com',
            'password_user' => password_hash('12345',PASSWORD_BCRYPT),
        ],
        $data = [
            'name_user' => 'Tami',
            'email_user' => 'tami@gmail.com',
            'password_user' => password_hash('1122',PASSWORD_BCRYPT),
        ],
    ];
            $this->db->table('users')->insertBatch($data);
        
    }
}
