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
            'date' => date('Y-m-d H:i:s'),
            'start_rest_time' => time('Y-m-d H:i:s'),
            'end_rest_time' => time('Y-m-d H:i:s'),
            'rest_time' => time('Y-m-d H:i:s'),
        ];
        DB::table('rests')->insert($param);
    }
}
