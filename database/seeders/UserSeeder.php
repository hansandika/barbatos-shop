<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'john@mail.com',
            'password' => bcrypt('johndoe02'),
            'gender' => 'Male',
            'date_of_birth' => '1990-01-01',
        ]);

        User::create([
            'name' => 'Hans Geovani',
            'email' => 'hansandia70@gmail.com',
            'password' => bcrypt('hansgeovani2'),
            'gender' => 'Male',
            'date_of_birth' => '2002-10-10',
        ]);

        User::create([
            'name' => 'William',
            'email' => 'william@gmail.com',
            'password' => bcrypt('william02'),
            'gender' => 'Male',
            'date_of_birth' => '2002-09-08',
        ]);
    }
}
