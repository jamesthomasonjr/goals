<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.org',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(10)
        ]);

    }
}
