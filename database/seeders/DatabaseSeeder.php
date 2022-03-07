<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

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

        User::create([
            'name'      => 'Dwiki Reza',
            'email'    => 'dwiki@gmail.com',
            'password'  => bcrypt('1245')
        ]);

        User::create([
            'name'      => 'Reza',
            'email'     => 'reza@gmail.com',
            'password'  => bcrypt('1245')
        ]);

        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Post::create([
            'title'     => 'Judul Pertama',
            'slug'      => 'judul-pertama',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
            ut error optio voluptate voluptatibus quae dolorum asperiores inventore
            expedita, vero et odit maxime molestias nulla ab ipsa quis? Consequuntur
            maiores doloremque eligendi commodi tempora possimus, distinctio eaque
            recusandae magni ipsam asperiores laborum ratione totam exercitationem.
            Quam, praesentium. Natus voluptates a odit! Impedit quae rem alias, culpa
            labore ut ipsum blanditiis at beatae, ad tempore earum accusantium esse
            dignissimos quo eveniet suscipit nam minus quidem sunt, dolore dicta natus
            voluptatum consectetur. Cum sunt consectetur quam, expedita amet dolore ex
            libero rem cumque id blanditiis possimus laudantium vel, nesciunt nihil
            ipsum dolor!',
            'category_id' => 1,
            'user_id'   =>2
        ]);

        Post::create([
            'title'     => 'Judul Ke Dua',
            'slug'      => 'judul-kedua',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
            ut error optio voluptate voluptatibus quae dolorum asperiores inventore
            expedita, vero et odit maxime molestias nulla ab ipsa quis? Consequuntur
            maiores doloremque eligendi commodi tempora possimus, distinctio eaque
            recusandae magni ipsam asperiores laborum ratione totam exercitationem.
            Quam, praesentium. Natus voluptates a odit! Impedit quae rem alias, culpa
            labore ut ipsum blanditiis at beatae, ad tempore earum accusantium esse
            dignissimos quo eveniet suscipit nam minus quidem sunt, dolore dicta natus
            voluptatum consectetur. Cum sunt consectetur quam, expedita amet dolore ex
            libero rem cumque id blanditiis possimus laudantium vel, nesciunt nihil
            ipsum dolor!',
            'category_id' => 1,
            'user_id'   =>1
        ]);

        Post::create([
            'title'     => 'Judul Ke Tiga',
            'slug'      => 'judul-ketiga',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
            ut error optio voluptate voluptatibus quae dolorum asperiores inventore
            expedita, vero et odit maxime molestias nulla ab ipsa quis? Consequuntur
            maiores doloremque eligendi commodi tempora possimus, distinctio eaque
            recusandae magni ipsam asperiores laborum ratione totam exercitationem.
            Quam, praesentium. Natus voluptates a odit! Impedit quae rem alias, culpa
            labore ut ipsum blanditiis at beatae, ad tempore earum accusantium esse
            dignissimos quo eveniet suscipit nam minus quidem sunt, dolore dicta natus
            voluptatum consectetur. Cum sunt consectetur quam, expedita amet dolore ex
            libero rem cumque id blanditiis possimus laudantium vel, nesciunt nihil
            ipsum dolor!',
            'category_id' => 2,
            'user_id'   =>1
        ]);

        Post::create([
            'title'     => 'Judul Ke Empat',
            'slug'      => 'judul-keempat',
            'excerpt'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda,
            ut error optio voluptate voluptatibus quae dolorum asperiores inventore
            expedita, vero et odit maxime molestias nulla ab ipsa quis? Consequuntur
            maiores doloremque eligendi commodi tempora possimus, distinctio eaque
            recusandae magni ipsam asperiores laborum ratione totam exercitationem.
            Quam, praesentium. Natus voluptates a odit! Impedit quae rem alias, culpa
            labore ut ipsum blanditiis at beatae, ad tempore earum accusantium esse
            dignissimos quo eveniet suscipit nam minus quidem sunt, dolore dicta natus
            voluptatum consectetur. Cum sunt consectetur quam, expedita amet dolore ex
            libero rem cumque id blanditiis possimus laudantium vel, nesciunt nihil
            ipsum dolor!',
            'category_id' => 2,
            'user_id'   =>2
        ]);
    }
}

