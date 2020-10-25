<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Handset;
use App\Models\User;


class HandsetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Clears the handsets table data
        Handset::truncate();

        // Populate handset data
        DB::table('handsets')->insert([[
          'type' => 'Mobile phone'
        ],[
          'type' => 'Desk phone'
        ],[
          'type' => 'Software phone'
        ]]);
    }
}
