<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'title' => 'Shops',
            ],
            [
                '' => 'Hotels'
            ],
            [
                'title' => 'Restaurants'
            ],[
                'title' => 'Fitness'
            ],[
                'title' => 'Events'
            ],
        ]);
    }
}
