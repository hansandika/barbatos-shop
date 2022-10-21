<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'country_name' => 'Indonesia',
            'country_code' => 'ID',
        ]);

        Country::create([
            'country_name' => 'Malaysia',
            'country_code' => 'MY',
        ]);
    }
}
