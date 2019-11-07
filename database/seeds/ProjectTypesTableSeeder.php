<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('project_types')->insert([
            'name' => 'Software Project',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
