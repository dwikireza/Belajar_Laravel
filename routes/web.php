<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Dwiki Reza",
            "body"      => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus itaque
            qui ratione mollitia minus ullam ab doloremque voluptatem, consequuntur
            distinctio dolores aliquam corporis! Fugit commodi incidunt sequi
            suscipit debitis, quidem totam saepe omnis magni nulla. Asperiores magni
            quisquam facilis quidem, neque sapiente iure harum quia numquam sunt
            dolores fugit minus ad porro, vero corrupti ipsa cum eligendi dolore
            odit sit explicabo. Quibusdam illum at aliquid iure dolores suscipit
            quis. Illo recusandae aspernatur, mollitia atque a cumque? Nam deleniti
            reprehenderit fugiat."
        ],

        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Muhammad Dwiki",
            "body"      => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus itaque
            qui ratione mollitia minus ullam ab doloremque voluptatem, consequuntur
            distinctio dolores aliquam corporis! Fugit commodi incidunt sequi
            suscipit debitis, quidem totam saepe omnis magni nulla. Asperiores magni
            quisquam facilis quidem, neque sapiente iure harum quia numquam sunt
            dolores fugit minus ad porro, vero corrupti ipsa cum eligendi dolore
            odit sit explicabo. Quibusdam illum at aliquid iure dolores suscipit
            quis. Illo recusandae aspernatur, mollitia atque a cumque? Nam deleniti
            reprehenderit fugiat."
        ]
        ];



    return view('posts', [
        "title" => "Post",
        "posts"  => $blog_posts
    ]);
});

//halaman single posts


Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Dwiki Reza",
            "body"      => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus itaque
            qui ratione mollitia minus ullam ab doloremque voluptatem, consequuntur
            distinctio dolores aliquam corporis! Fugit commodi incidunt sequi
            suscipit debitis, quidem totam saepe omnis magni nulla. Asperiores magni
            quisquam facilis quidem, neque sapiente iure harum quia numquam sunt
            dolores fugit minus ad porro, vero corrupti ipsa cum eligendi dolore
            odit sit explicabo. Quibusdam illum at aliquid iure dolores suscipit
            quis. Illo recusandae aspernatur, mollitia atque a cumque? Nam deleniti
            reprehenderit fugiat."
        ],

        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Muhammad Dwiki",
            "body"      => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus itaque
            qui ratione mollitia minus ullam ab doloremque voluptatem, consequuntur
            distinctio dolores aliquam corporis! Fugit commodi incidunt sequi
            suscipit debitis, quidem totam saepe omnis magni nulla. Asperiores magni
            quisquam facilis quidem, neque sapiente iure harum quia numquam sunt
            dolores fugit minus ad porro, vero corrupti ipsa cum eligendi dolore
            odit sit explicabo. Quibusdam illum at aliquid iure dolores suscipit
            quis. Illo recusandae aspernatur, mollitia atque a cumque? Nam deleniti
            reprehenderit fugiat."
        ]
        ];

        $new_post =[];
        foreach ($blog_posts as $post) {
            if($post["slug"] == $slug){
                $new_post =$post;
            }
        }
    return view('post',[
        "title"  => "Single Post",
        "post"   => $new_post
    ]);
});
