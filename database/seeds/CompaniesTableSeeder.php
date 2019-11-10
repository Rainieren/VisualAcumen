<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
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
            DB::table('companies')->insert([
                'country_id' => $faker->numberBetween(1, 10),
                'type_id' => $faker->numberBetween(1, 10),
                'contract_id' => $faker->numberBetween(1, 10),
                'sidebar_id' => $index,
                'name' => $faker->company,
                'address' => $faker->streetAddress,
                'postalcode' => $faker->postcode,
                'state' => $faker->state,
                'city' => $faker->name,
                'company_logo' => $faker->image(),
                'phonenumber' => $faker->phonenumber,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
