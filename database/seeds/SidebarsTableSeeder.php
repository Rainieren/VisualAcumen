<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SidebarsTableSeeder extends Seeder
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
            DB::table('sidebars')->insert([
                'background_color' => '#0052CC',
                'text_color' => '#FFFFFF',
                'active_background'=>'#05367F',
                'hover_background'=>'#0368ff',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
