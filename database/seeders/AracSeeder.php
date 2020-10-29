<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AracSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aracs')->insert([
            [
                'sinif_id' => '1',
                'plaka' => '01 FTH 01',
            ],
            [
                'sinif_id' => '1',
                'plaka' => '01 TF 038',
            ],
            [
                'sinif_id' => '2',
                'plaka' => '01 TF 006',
            ]
        ]);
    }
}
