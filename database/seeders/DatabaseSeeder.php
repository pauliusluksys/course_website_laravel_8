<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\Course;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Rating;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $this->call(LevelSeeder::class);        
        //\App\Models\Course::factory(10)->create();
        \App\Models\User::factory(10)->create();

        // \App\Models\Category::factory()
        //     ->has(Course::factory()->count(3), 'posts')
        //     ->create();
            For($i=0;$i<15;$i++){
            $category = Category::factory()
            ->has(Course::factory()->count(3)->has(Rating::factory()->count(10)))->create();
        }









        // DB::table('user_selected_courses')->insert([
        //     'percent_done' => 12,
        //     'user_id' => 1,
        //     'course_id' => 2,
        // ]);
        // DB::table('user_selected_courses')->insert([
        //     'percent_done' => 12,
        //     'user_id' => 1,
        //     'course_id' => 3,
        // ]);
        // DB::table('user_selected_courses')->insert([
        //     'percent_done' => 12,
        //     'user_id' => 1,
        //     'course_id' => 1,
        // ]);
        // DB::table('user_selected_courses')->insert([
        //     'percent_done' => 12,
        //     'user_id' => 1,
        //     'course_id' => 8,
        // ]);
    }
}
