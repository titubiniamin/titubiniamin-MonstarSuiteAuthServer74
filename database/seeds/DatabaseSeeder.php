<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     $this->call(UserSeeder::class);
     $this->call(IndustrySeeder::class);
     $this->call(CountrySeeder::class);
     $this->call(CitySeeder::class);
     $this->call(ProductSeeder::class);

    }
}
