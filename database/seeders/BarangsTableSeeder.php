<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Sabun', 'merk'=>'Lifebuoy', 'jumlah'=>'5', 'stok'=>'500'],
            ['nama_barang'=>'Pasta Gigi', 'merk'=>'Pepsodent', 'jumlah'=>'7', 'stok'=>'250'],
            ['nama_barang'=>'Pulpen', 'merk'=>'I-tech', 'jumlah'=>'9', 'stok'=>'70'],
            ['nama_barang'=>'Mouse', 'merk'=>'Logitech', 'jumlah'=>'2', 'stok'=>'20'],
            ['nama_barang'=>'Keyboard', 'merk'=>'Fantech', 'jumlah'=>'1', 'stok'=>'25']
        ];
        DB::table('barangs')->insert($barangs);
    }
}
