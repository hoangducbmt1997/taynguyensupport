<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
            'username'=>'kimbao1325',
            'password'=>bcrypt('123456'),
            'full_name'=>'Kim Gia Bao',
            'roles'=>1,
            'phone_number'=>'0354326998',
            'email'=>'kimbao999@gmail.com'
       ]);
        DB::table('tbl_users')->insert([
            'username'=>'kimbao132522',
            'password'=>bcrypt('123456'),
            'full_name'=>'Kim Gia Bao 1',
            'roles'=>1,
            'phone_number'=>'0354326998',
            'email'=>'kimbao123@gmail.com'
       ]);
    }
}
