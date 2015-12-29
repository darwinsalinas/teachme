<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Model::unguard();
//
//        $this->call(UserTableSeeder::class);
//
//        Model::reguard();

        User::create([
            'name' => 'Darwin Salinas',
            'email' => 'salinash2000@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
