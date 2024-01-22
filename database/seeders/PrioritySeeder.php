<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('priorities')->insert([
            'name' => '優先度大'
            ]);
         DB::table('priorities')->insert([
            'name' => '優先度中'
            ]);
         DB::table('priorities')->insert([
            'name' => '優先度小'
            ]);
    }
}
