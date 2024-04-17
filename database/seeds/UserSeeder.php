<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['email' => 'labib@labib.com',
                'password' => Hash::make('123123123'),
                'security_code' => Str::random(6),
                'is_active' => 1],
            ['email' => 'titubiniamin@gmail.com',
                'password' => Hash::make('123123123'),
                'security_code' => Str::random(6),
                'is_active' => 1],

        ];
        foreach ($data as $record) {
            User::create($record);
        }
    }
}
