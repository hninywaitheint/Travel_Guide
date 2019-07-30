<?php

use Illuminate\Database\Seeder;

class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loginusers')->insert([
            ['username' => 'hnin1234567.yt@gmail.com',
            'pass' => '13121997hnin'
            ]
        ]);
    }
}
