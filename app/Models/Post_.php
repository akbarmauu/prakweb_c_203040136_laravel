<?php

namespace App\Models;

class Post
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam ex saepe dignissimos dolorum, neque, repudiandae laudantium odio aut omnis facere corporis molestiae doloribus praesentium quam rem magnam suscipit quaerat magni! Iste odit molestias recusandae tempora cum beatae aperiam architecto reprehenderit illum rerum commodi laboriosam, consectetur, magni aliquid, officiis distinctio exercitationem! Voluptate iste esse est adipisci exercitationem minus? Quibusdam laborum quidem eos, eius, accusantium, exercitationem totam minus nemo pariatur tempore quia enim omnis nisi sequi repellat! Consequatur, officia. Rem, inventore suscipit."
        ],
        [
            "title" => "Judul Post Akbar",
            "slug" => "judul-post-kedua",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatum a dolorum totam. Ex eligendi voluptatem consequatur iste rerum, quasi tempore fuga illum in necessitatibus, sapiente laboriosam? Adipisci voluptatem, atque veritatis enim numquam, aut placeat maiores omnis aperiam delectus sint? Voluptas commodi, quisquam perspiciatis ducimus reprehenderit rerum repellendus fuga quibusdam maxime, quis aperiam magnam odit earum eaque porro voluptatum illo? Voluptatum debitis optio nihil atque dolore sapiente molestias ab, eius corporis numquam enim earum sed autem accusamus dolores asperiores repellendus accusantium et ducimus. Sit vel placeat laborum. Consequuntur, reprehenderit. Consectetur distinctio, quibusdam omnis ipsa dolorem soluta possimus. Officiis, aliquid labore."
        ],
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //      if($p["slug"] === $slug) {
        //            $post = $p;
        //   }          
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
