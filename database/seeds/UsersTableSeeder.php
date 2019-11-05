<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->insert([
            'job_id' => 1,
            'company_id' => 10,
            'role_id' => 5,
            'department_id' => 7,
            'contract_id' => 3,
            'username' => 'Rainieren',
            'firstname' => 'Rainier',
            'middlename' => 'Frits',
            'lastname' => 'Laan',
            'email' => 'rainier.laan@home.nl',
            'date_of_birth' => $faker->date(),
            'gender' => 'Male',
            'phonenumber' => $faker->phoneNumber,
            'hire_date' => $faker->date(),
            'timezone' => $faker->timezone,
            'last_seen' => Carbon::now(),
            'ip_address' => '127.0.0.1',
            'password' => bcrypt('welkom'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        foreach(range(1,49) as $index) {
            DB::table('users')->insert([
                'job_id' => $faker->numberBetween(1, 24),
                'company_id' => $faker->numberBetween(1, 10),
                'role_id' => $faker->numberBetween(1, 10),
                'department_id' => $faker->numberBetween(1, 10),
                'contract_id' => $faker->numberBetween(1, 10),
                'username' => $faker->userName,
                'firstname' => $faker->firstName(null),
                'middlename' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'date_of_birth' => $faker->date(),
                'gender' => 'Male',
                'phonenumber' => $faker->phoneNumber,
                'hire_date' => $faker->date(),
                'timezone' => $faker->timezone,
                'last_seen' => Carbon::now(),
                'ip_address' => $faker->ipv4,
                'password' => bcrypt('welkom'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
