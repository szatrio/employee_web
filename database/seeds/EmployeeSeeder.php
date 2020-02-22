<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //faker
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('employee')->insert([
                'name' => $faker->unique()->name,
                'position' => $faker->jobTitle,
                'age' => $faker->numberBetween(20,40),
                'address' => $faker->address
            ]);
        }
    }
}
