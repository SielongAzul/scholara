<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Validator;

class ValidatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Validator::create([
            'name'=> 'Validator',
            'email'=> 'validator@scholara.co',
            'password'=> Hash::make('12345')

        ]);
    }
}
