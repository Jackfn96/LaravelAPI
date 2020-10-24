<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Handset;


class HandsetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Handset::truncate();
        DB::table('handsets')->insert([[
          'type' => 'Mobile phone'
        ],[
          'type' => 'Desk phone'
        ],[
          'type' => 'Software phone'
        ]]);
    }
}
