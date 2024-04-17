<?php

use App\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Agriculture'],
            ['name' => 'Health'],
            ['name' => 'Technology'],
            ['name' => 'Manufacturing'],
            ['name' => 'Construction'],
            ['name' => 'Transportation'],
            ['name' => 'Mining'],
            ['name' => 'Education'],
            ['name' => 'Hospitality'],
            ['name' => 'Information'],
            ['name' => 'Fashion'],
            ['name' => 'Insurance'],
            ['name' => 'Telecommunications'],
            ['name' => 'Financial Services'],
            ['name' => 'Automobiles'],
        ];
        foreach ($data as $entry) {
            Industry::create($entry);
        }
    }
}
