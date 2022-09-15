<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "nama" => "Admin",
                "email" => "rahul_sharma@mail.com",
                "no_telp" => "222444555",
                "role" => "admin",
                "password" => password_hash("admin123", PASSWORD_DEFAULT)
            ],
            [
                "nama" => "Anggota1",
                "email" => "anggota1@gmail.com",
                "no_telp" => "555444333",
                "role" => "anggota",
                "password" => password_hash("anggota123", PASSWORD_DEFAULT)
            ],
        ]);
    }
}
