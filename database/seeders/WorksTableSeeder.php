<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_name' => '兵庫太郎',
            'date' => '20211108',
            'start_work_time' => '20:20',
            'end_work_time' => '20:40',
            'work_time' => '00:20'
        ];
        DB::table('works')->insert($param);
    }
}
