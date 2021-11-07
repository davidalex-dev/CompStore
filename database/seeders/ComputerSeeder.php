<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('computer')->insert([
            'name' => "David's Computer",
            'chassis' => 'Zalman Z9 Neo',
            'motherboard' => 'ASUS Z690 Max-K',
            'cpu' => 'Intel Core i5-12600K',
            'gpu' => 'MSI RX 6600 XT GAMING X 8GB',
            'ram' => 'QUEENMAX 32 GB DDR5-4800 (2 x 16 GB Dual Channel)',
            'storage' => 'Western Digital Blue 512 GB nVME SSD',
            'os' => 'Windows 11 Pro',
            'power' => 'MSI A650BF 650W',
            'total_price' => '27500000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('computer')->insert([
            'name' => 'Budget Computer',
            'chassis' => 'Simbadduar ZeroX SS-42069',
            'motherboard' => 'JetX H81-A',
            'cpu' => 'Intel Core i3-4130',
            'gpu' => 'Biostar GeForce GT 710 4GB',
            'ram' => 'KLAXX 8 GB DDR3 1600 1x8GB',
            'storage' => 'Patriot Spark 256 GB SATA SSD',
            'os' => 'Windows 10 Pro',
            'power' => 'Digital Alliance DenGen 400W',
            'total_price' => '8450000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('computer')->insert([
            'name' => 'Ultra Chad',
            'chassis' => 'Lian-Li Pro Max AIRFLOW',
            'motherboard' => 'ASUS ROG STRIX Z690-MAXX',
            'cpu' => 'Intel Core i9-12900K',
            'gpu' => 'EVGA GeForce RTX 3090 ULTRA 24GB',
            'ram' => 'G.Skill TridentZ 64 GB DDR5-6400 2x32GB',
            'storage' => 'Kingcool 4 TB PCIe4 nVME',
            'os' => 'Windows 11',
            'power' => 'ASUS ROG TESLA 1000W',
            'total_price' => '69420000',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
