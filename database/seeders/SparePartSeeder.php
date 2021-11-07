<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SparePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'Thermaltake Versa H26 TG',
            'model' => 'Versa H26 TG',
            'manufacturer' => 'Thermaltake',
            'type' => 'Chassis',
            'price' => '800000',
            'stock' => '25',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'MSI B550 Prime',
            'model' => 'B550 Prime',
            'manufacturer' => 'MSI',
            'type' => 'Motherboard',
            'price' => '2450000',
            'stock' => '30',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'AMD Ryzen 7 5800X',
            'model' => 'Ryzen 7 5800X',
            'manufacturer' => 'AMD',
            'type' => 'Processor',
            'price' => '8750000',
            'stock' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'Digital Alliance RTX 3080 Ti ULTRA GAMING 12GB',
            'model' => 'RTX 3080 Ti ULTRA GAMING 12GB',
            'manufacturer' => 'Digital Alliance',
            'type' => 'GPU',
            'price' => '28500000',
            'stock' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'Kingston Prime 1 TB nVME SSD',
            'model' => 'Prime 1 TB nVME SSD',
            'manufacturer' => 'Kingston',
            'type' => 'Storage',
            'price' => '1750000',
            'stock' => '15',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('spare_part')->insert([
            'id' => Str::random(5),
            'name' => 'Kingboom Prime 650W',
            'model' => 'Prime 650W',
            'manufacturer' => 'Kingboom',
            'type' => 'Power Supply',
            'price' => '1275000',
            'stock' => '40',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
