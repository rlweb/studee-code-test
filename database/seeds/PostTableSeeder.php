<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'author'     => 'Rhys Laval',
            'title'      => 'First post!',
            'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae bibendum purus. Aenean consectetur mattis diam, ac ornare diam congue quis. Nunc porta dolor auctor, vehicula mauris porttitor, dictum sapien. Phasellus lacinia ex nisi, vitae congue tortor pharetra et. In lorem dui, ullamcorper et aliquet at, vulputate varius massa. Morbi et neque odio. Aliquam id lacus vel metus rhoncus tincidunt.',
            'created_at' => time(),
        ]);
    }
}
