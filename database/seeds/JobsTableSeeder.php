<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('jobs')->insert([
            'name' => 'CEO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        foreach(range(1,24) as $index) {
            DB::table('jobs')->insert([
                'name' => $faker->jobTitle,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
