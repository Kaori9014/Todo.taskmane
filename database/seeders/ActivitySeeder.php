<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('activities')->insert([
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
         DB::table('activities')->insert([
            'user_id' => 2,
            'title' => 'title2',
            'memo' => 'memo2',
            'category_id' => 2,
            'priority_id' => 2,
            'workload' => '2時間',
            'deadline' => '2024-01-02 12:00:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('activities')->insert([
            'user_id' => 3,
            'title' => 'title3',
            'memo' => 'memo3',
            'category_id' => 1,
            'priority_id' => 3,
            'workload' => '3時間',
            'deadline' => '2024-01-03 12:00:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
         DB::table('activities')->insert([
            'user_id' => 1,
            'title' => 'title4',
            'memo' => 'memo4',
            'category_id' => 2,
            'priority_id' => 2,
            'workload' => '5時間',
            'deadline' => '2024-01-04 12:00:00',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
