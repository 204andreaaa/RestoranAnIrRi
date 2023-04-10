<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
        
                [
                    'nama' => 'rifki',
                    'email' => 'riki@gmail.com',
                    'subject' => 'saran',
                    'deskripsi' => 'kalu bisa menu makan di tambahkan',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'nama' => 'Reza',
                    'email' => 'reza@gmail.com',
                    'subject' => 'kritik',
                    'deskripsi' => 'tadi saya makan nasi goreng ada ulat di daun',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
        ]);
    }
}