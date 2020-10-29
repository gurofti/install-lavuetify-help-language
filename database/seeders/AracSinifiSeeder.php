<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AracSinifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arac_sinifis')->insert([
            [
                'sinif' => 'Binek'
            ],
            [
                'sinif' => 'Ticari'
            ],
            [
                'sinif' => 'Kamyonet'
            ]
        ]);
    }
}
