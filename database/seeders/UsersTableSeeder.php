<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id' => '1',
            'name' => '兵庫太郎',
            'email' => 'hyougo@gmail.com',
            'password' => 'hyougo2021'
        ];
        DB::table('users')->insert($param);
    }
}
