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

            $name = $faker->bs;
            $words = explode(" ", $name);
            $code = "";

            if(count($words) > 0) {
                foreach($words as $word) {
                    $code .= $word[0];
                }
            }


            DB::table('projects')->insert([
                'company_id' => $faker->numberBetween(1, 10),
                'name' => $name,
                'code' => strtoupper($code),
                'description' => $faker->realText(),
                'color' => $faker->hexColor,
                'responsible_id' => 1,
                'client_id' => 1,
                'projecttype_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
