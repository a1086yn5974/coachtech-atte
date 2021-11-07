<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'user_name' => '兵庫太郎',
            'email' => 'hyougo@gmail.com',
            'password' => 'hyougo2021'
        ];
        DB::table('users')->insert($param);
    }
}
