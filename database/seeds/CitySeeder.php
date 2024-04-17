<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Kabul',
                'country_id' => 1
            ],
            [
                'name' => 'Herat',
                'country_id' => 1
            ],
            [
                'name' => 'Dhaka',
                'country_id' => 18
            ],

        ];
        foreach ($data as $record) {
            City::create($record);
        }
    }
}
