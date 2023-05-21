<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run(){
        $faker = Factory::create();

        for ($i = 0; $i < 200; $i++) {
            $gender = $faker->randomElement(['Male', 'Female']);
            $firstName = $gender == "Male" ? $faker->firstNameMale : $faker->firstNameFemale;
            DB::table('people')->insert([
                'FirstName' => $firstName,
                'LastName' => $faker->lastName,
                'Gender' => $gender,
                'PhoneNumber' => $faker->phoneNumber, 
                'Street' => $faker->streetAddress,
                'City' => $faker->city,
                'Country' => $faker->country
            ]);
        }
    }
}
?>