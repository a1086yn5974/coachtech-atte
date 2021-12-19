<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '兵庫太郎',
            'email' => 'hyougo@gmail.com',
            'password' => 'hyougo2021'
        ];
        DB::table('users')->insert($param);
    }
}
