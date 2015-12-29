<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->createAdmin();
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'Darwin Salinas',
            'email' => 'salinash2000@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }

}
