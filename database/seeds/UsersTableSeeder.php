<?php

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
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Nam Dev',
            'username' => 'namdevdk2710',
            'email' => 'namdevdk2710@gmail.com',
            'password' => bcrypt('01663600396'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Nam Author',
            'username' => 'thanhnamdk2710',
            'email' => 'thanhnamdk2710@gmail.com',
            'password' => bcrypt('01663600396'),
        ]);
    }
}
