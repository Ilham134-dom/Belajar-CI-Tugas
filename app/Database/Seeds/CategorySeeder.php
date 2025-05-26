<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name'        => 'Elektronik',
                'description' => 'Perangkat elektronik seperti TV, smartphone, dll.',
                'created_at'  => date("Y-m-d H:i:s"),
                'updated_at'  => date("Y-m-d H:i:s"),
            ],
            [
                'name'        => 'Buku',
                'description' => 'Berbagai jenis buku dan literatur.',
                'created_at'  => date("Y-m-d H:i:s"),
                'updated_at'  => date("Y-m-d H:i:s"),
            ],
            [
                'name'        => 'Pakaian',
                'description' => 'Pakaian pria, wanita, dan anak-anak.',
                'created_at'  => date("Y-m-d H:i:s"),
                'updated_at'  => date("Y-m-d H:i:s"),
            ],
        ];

        foreach ($categories as $data) {
            print_r($data);
            $this->db->table('product_category')->insert($data);
        }
    }
}