<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'nama' => 'Nasi Goreng',
                'harga' => 20000,
                'foto' => url('https://img.okezone.com/content/2022/08/11/298/2646282/resep-nasi-goreng-rendah-kalori-cocok-untuk-diet-D8kxJ8GTcT.jpg'),
                'status' => 'redy',
                'kategori' => '1',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Sate Ayam',
                'harga' => 25000,
                'foto' => url('https://assets.pikiran-rakyat.com/crop/19x167:971x853/x/photo/2022/09/27/799023755.jpg'),
                'status' => 'redy',
                'kategori' => '1',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Ayam Bakar',
                'harga' => 20000,
                'foto' => url('https://asset.kompas.com/crops/nsueiJRoh-BTF94-Y71Nv0f3Zj0=/3x0:700x465/780x390/data/photo/2020/12/30/5fec5602f116e.jpg'),
                'status' => 'redy',
                'kategori' => '1',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Gulai Daging',
                'harga' => 7000,
                'foto' => url('https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-gulai-daging-1.jpg'),
                'status' => 'redy',
                'kategori' => '1',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            //Menu Minuman
            [
                'nama' => 'Coffe Late',
                'harga' => 20000,
                'foto' => url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4N96SClzvbGEOkzquiF7bPsqFEZ4_UB7Fww&usqp=CAU'),
                'status' => 'redy',
                'kategori' => '2',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Es Coklat',
                'harga' => 25000,
                'foto' => url('https://i0.wp.com/i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/dc35ed23-0f49-4321-9e0c-f984a06823bb_Go-Biz_20220119_165830.jpeg'),
                'status' => 'redy',
                'kategori' => '2',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Es Teh Manis',
                'harga' => 4000,
                'foto' => url('https://assets-pergikuliner.com/jrzE605FK-Uf4ny6G7aND09eFjY=/fit-in/1366x768/smart/filters:no_upscale()/https://assets-pergikuliner.com/uploads/bootsy/image/20515/Es_Teh_Manis__idntimes.com_.png'),
                'status' => 'redy',
                'kategori' => '2',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Jus Buah',
                'harga' => 7000,
                'foto' => url('https://www.astronauts.id/blog/wp-content/uploads/2022/07/Menu-Jus-Sayur-dan-Buah-Untuk-Diet-Dijamin-Lezat.jpg'),
                'status' => 'redy',
                'kategori' => '2',
                'deskripsi' => 'Makanan Minuman Terbaik',
                'created_at' => now(),
                'updated_at' => now()
            ]
         ]);
    }
}
