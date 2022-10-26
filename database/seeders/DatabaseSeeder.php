<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Akbar Maulana',
        //     'email' => 'akbarmaumau12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Farhat Aljaelani',
        //     'email' => 'Farhatalajealani@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(15)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi,
        //     sint veniam atque, provident ipsam eos molestias delectus a saepe, facere iusto quo ducimus vitae quas recusandae distinctio aut. 
        //     Illo modi architecto voluptatibus ab voluptatem ipsa
        //     ratione dolorem quas mollitia ut, maiores nulla! Saepe ipsum praesentium ullam a, aspernatur corrupti adipisci reiciendis quis non optio maxime eum vitae? Sequi, voluptatum? Facilis,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi,
        //     sint veniam atque, provident ipsam eos molestias delectus a saepe, facere iusto quo ducimus vitae quas recusandae distinctio aut. 
        //     Illo modi architecto voluptatibus ab voluptatem ipsa
        //     ratione dolorem quas mollitia ut, maiores nulla! Saepe ipsum praesentium ullam a, aspernatur corrupti adipisci reiciendis quis non optio maxime eum vitae? Sequi, voluptatum? Facilis,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi,
        //     sint veniam atque, provident ipsam eos molestias delectus a saepe, facere iusto quo ducimus vitae quas recusandae distinctio aut. 
        //     Illo modi architecto voluptatibus ab voluptatem ipsa
        //     ratione dolorem quas mollitia ut, maiores nulla! Saepe ipsum praesentium ullam a, aspernatur corrupti adipisci reiciendis quis non optio maxime eum vitae? Sequi, voluptatum? Facilis,',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non unde velit labore. Ratione odit laborum commodi eius quasi,
        //     sint veniam atque, provident ipsam eos molestias delectus a saepe, facere iusto quo ducimus vitae quas recusandae distinctio aut. 
        //     Illo modi architecto voluptatibus ab voluptatem ipsa
        //     ratione dolorem quas mollitia ut, maiores nulla! Saepe ipsum praesentium ullam a, aspernatur corrupti adipisci reiciendis quis non optio maxime eum vitae? Sequi, voluptatum? Facilis,',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
