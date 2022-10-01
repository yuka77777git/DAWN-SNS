<?php

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
        //
        DB::table('users')->insert([
            'username' => 'sns-user1',
            'mail' => 'sns-user1@dawn.co.jp',
            'password' => 'user1user1',
            'bio' => 'はじめまして',
        ]);
    }
}
