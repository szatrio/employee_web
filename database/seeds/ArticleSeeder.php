<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 50; $i++){
            DB::table('article')->insert([
                'title' => $faker->text,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
