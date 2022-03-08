<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        // User::create([
        //     'name'      => 'Dwiki Reza',
        //     'email'    => 'dwiki@gmail.com',
        //     'password'  => bcrypt('1245')
        // ]);

        // User::create([
        //     'name'      => 'Reza',
        //     'email'     => 'reza@gmail.com',
        //     'password'  => bcrypt('1245')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Post::factory(20)->create();

    }
}

