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

        Country::create([
            'country_name' => 'Singapore',
            'country_code' => 'SG',
        ]);

        Country::create([
            'country_name' => 'Thailand',
            'country_code' => 'TH',
        ]);

        Country::create([
            'country_name' => 'Vietnam',
            'country_code' => 'VN',
        ]);

        Country::create([
            'country_name' => 'Philippines',
            'country_code' => 'PH',
        ]);

        Country::create([
            'country_name' => 'Cambodia',
            'country_code' => 'KH',
        ]);

        Country::create([
            'country_name' => 'Laos',
            'country_code' => 'LA',
        ]);

        Country::create([
            'country_name' => 'Brunei',
            'country_code' => 'BN',
        ]);

        Country::create([
            'country_name' => 'Myanmar',
            'country_code' => 'MM',
        ]);

        Country::create([
            'country_name' => 'Timor Leste',
            'country_code' => 'TL',
        ]);

        Country::create([
            'country_name' => 'Bangladesh',
            'country_code' => 'BD',
        ]);

        Country::create([
            'country_name' => 'India',
            'country_code' => 'IN',
        ]);

        Country::create([
            'country_name' => 'Pakistan',
            'country_code' => 'PK',
        ]);

        Country::create([
            'country_name' => 'Sri Lanka',
            'country_code' => 'LK',
        ]);

        Country::create([
            'country_name' => 'Nepal',
            'country_code' => 'NP',
        ]);

        Country::create([
            'country_name' => 'Bhutan',
            'country_code' => 'BT',
        ]);
    }
}
