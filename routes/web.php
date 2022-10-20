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

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Akbar Maulana",
        "email" => "akbarmaumau12@gmail.com",
        "image" => "profil.jpeg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam ex saepe dignissimos dolorum, neque, repudiandae laudantium odio aut omnis facere corporis molestiae doloribus praesentium quam rem magnam suscipit quaerat magni! Iste odit molestias recusandae tempora cum beatae aperiam architecto reprehenderit illum rerum commodi laboriosam, consectetur, magni aliquid, officiis distinctio exercitationem! Voluptate iste esse est adipisci exercitationem minus? Quibusdam laborum quidem eos, eius, accusantium, exercitationem totam minus nemo pariatur tempore quia enim omnis nisi sequi repellat! Consequatur, officia. Rem, inventore suscipit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatum a dolorum totam. Ex eligendi voluptatem consequatur iste rerum, quasi tempore fuga illum in necessitatibus, sapiente laboriosam? Adipisci voluptatem, atque veritatis enim numquam, aut placeat maiores omnis aperiam delectus sint? Voluptas commodi, quisquam perspiciatis ducimus reprehenderit rerum repellendus fuga quibusdam maxime, quis aperiam magnam odit earum eaque porro voluptatum illo? Voluptatum debitis optio nihil atque dolore sapiente molestias ab, eius corporis numquam enim earum sed autem accusamus dolores asperiores repellendus accusantium et ducimus. Sit vel placeat laborum. Consequuntur, reprehenderit. Consectetur distinctio, quibusdam omnis ipsa dolorem soluta possimus. Officiis, aliquid labore."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam ex saepe dignissimos dolorum, neque, repudiandae laudantium odio aut omnis facere corporis molestiae doloribus praesentium quam rem magnam suscipit quaerat magni! Iste odit molestias recusandae tempora cum beatae aperiam architecto reprehenderit illum rerum commodi laboriosam, consectetur, magni aliquid, officiis distinctio exercitationem! Voluptate iste esse est adipisci exercitationem minus? Quibusdam laborum quidem eos, eius, accusantium, exercitationem totam minus nemo pariatur tempore quia enim omnis nisi sequi repellat! Consequatur, officia. Rem, inventore suscipit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Akbar Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptatum a dolorum totam. Ex eligendi voluptatem consequatur iste rerum, quasi tempore fuga illum in necessitatibus, sapiente laboriosam? Adipisci voluptatem, atque veritatis enim numquam, aut placeat maiores omnis aperiam delectus sint? Voluptas commodi, quisquam perspiciatis ducimus reprehenderit rerum repellendus fuga quibusdam maxime, quis aperiam magnam odit earum eaque porro voluptatum illo? Voluptatum debitis optio nihil atque dolore sapiente molestias ab, eius corporis numquam enim earum sed autem accusamus dolores asperiores repellendus accusantium et ducimus. Sit vel placeat laborum. Consequuntur, reprehenderit. Consectetur distinctio, quibusdam omnis ipsa dolorem soluta possimus. Officiis, aliquid labore."
        ],
    ];

        $new_post = [];
        foreach ($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});