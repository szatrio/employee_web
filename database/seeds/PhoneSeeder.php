<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('phone')->insert([
                'phone_number' => $faker->phoneNumber(),
                'customer_id' => $faker->unique()->numberBetween(1,50),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
