<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lists')->insert([
            'user_id' => 1,
            'title' => 'title1',
            'memo' => 'memo1',
            'category_id' => 1,
            'priority_id' => 1,
            'workload' => '1時間',
            'deadline' => '2024-01-01 12:00:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
