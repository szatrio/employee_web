<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;


class TagsSeeder extends Seeder
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
            DB::table('tags')->insert([
                'tag' => $faker->text,
                'article_id' => $faker->numberBetween(108,157),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
