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
            'country_id' => 1,
        ]);

        User::create([
            'name' => 'Hans Geovani',
            'email' => 'hansandika70@gmail.com',
            'password' => bcrypt('hansgeovani2'),
            'gender' => 'Male',
            'date_of_birth' => '2002-10-10',
            'country_id' => 3,
        ]);

        User::create([
            'name' => 'William',
            'email' => 'william@gmail.com',
            'password' => bcrypt('william02'),
            'gender' => 'Male',
            'date_of_birth' => '2002-09-08',
            'country_id' => 2,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin02'),
            'gender' => 'Male',
            'role' => 'admin',
            'date_of_birth' => '2002-09-08',
            'country_id' => 5,
        ]);
    }
}
