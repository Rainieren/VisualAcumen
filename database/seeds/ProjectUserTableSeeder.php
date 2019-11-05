<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,10) as $index) {
            DB::table('project_user')->insert([
                'user_id' => $faker->numberBetween(0, 50),
                'project_id' => $faker->numberBetween(1, 15),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
