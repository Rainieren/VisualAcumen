<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1,15) as $index) {
            DB::table('projects')->insert([
                'company_id' => $faker->numberBetween(0, 10),
                'name' => $faker->bs,
                'description' => $faker->realText(),
                'color' => $faker->hexColor,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
