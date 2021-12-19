<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now('Asia/Tokyo');
        $dt_end = Carbon::now('+6 hour','Asia/Tokyo');
        $param = [
            'user_table_id' => '5',
            'date' => $dt,
            'start_work_time' => $dt,
            'end_work_time' => $dt_end
        ];
        DB::table('works')->insert($param);
    }
}
