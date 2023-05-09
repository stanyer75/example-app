<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = category::create([
            'Name' =>'Personal',
            'slug' => 'personal'
        ]);


        $family = category::create([
            'Name' =>'Family',
            'slug' => 'family'
        ]);

        $work = category::create([
            'Name' =>'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => '1',
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>my first family post</p>',
            'body' => '<p>TablePlus never sends or stores any of your data to our server.</p>'
        ]);

        Post::create([
            'user_id' => '1',
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>my first family post</p>',
            'body' => '<p>TablePlus never sends or stores any of your data to our server.</p>'
        ]);
            
            
            
            

            /* \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('!password'),

         ]); */
    }
}
