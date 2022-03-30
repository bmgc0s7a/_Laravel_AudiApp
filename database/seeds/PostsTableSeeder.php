<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('posts')->insert([
            'title'       => 'First Title',
            'description' => 'First Post Description',
            'content'     => 'First Post Content',
            'is_active'   => 1,
            'slug'        => 'first-post',
            'user_id'     => 1,        
        ]);

    }
}
