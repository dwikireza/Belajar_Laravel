<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post
{
     private static $blog_posts =   [
        [
        "title"     => "Judul Post Pertama",
        "slug"      => "judul-post-pertama",
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

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
        //      self::$blog_posts; 
        //     $post =[];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post =$p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
        }
}
