<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Maulana Alief Hafids",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A perspiciatis quod, magnam porro 
                mollitia fuga sed omnis nam cum, fugiat unde. Asperiores impedit esse dolorum, eius voluptate sapiente velit praesentium 
                temporibus eos soluta suscipit earum quisquam et ducimus quidem ab provident doloremque blanditiis sed atque, expedita iure?
                Recusandae, vero omnis, debitis accusamus, libero sint soluta laborum ullam amet quos autem harum ipsam aspernatur iste molestias 
                commodi sequi magni! Veritatis, corporis? Excepturi, sapiente rerum laborum nesciunt odit accusamus necessitatibus? Vero, et!"

    ],
    [
        "title" => "Judul Post two",
        "slug" => "judul-post-kedua",
        "author" => "Maulana Alief Hafids",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A perspiciatis quod, magnam porro 
                mollitia fuga sed omnis nam cum, fugiat unde. Asperiores impedit esse dolorum, eius voluptate sapiente velit praesentium 
                temporibus eos soluta suscipit earum quisquam et ducimus quidem ab provident doloremque blanditiis sed atque, expedita iure?
                Recusandae, vero omnis, debitis accusamus, libero sint soluta laborum ullam amet quos autem harum ipsam aspernatur iste molestias 
                commodi sequi magni! Veritatis, corporis? Excepturi, sapiente rerum laborum nesciunt odit accusamus necessitatibus? Vero, et!"

    ]
];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
    }
}
