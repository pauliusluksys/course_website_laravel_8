<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            
            'name' => 'beginner',
        ]);
        DB::table('levels')->insert([
            
            'name' => 'intermediate',
        ]);
        DB::table('levels')->insert([
            
            'name' => 'advanced',
        ]);
        DB::table('levels')->insert([
            
            'name' => 'all',
        ]);
    }
}
