<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'work_id' => '5',
            'user_name' => '兵庫太郎',
            'date' => '20211108',
            'start_rest_time' => '21:30',
            'end_rest_time' => '21:40',
            'rest_time' => '00:10'
        ];
        DB::table('rests')->insert($param);
    }
}
