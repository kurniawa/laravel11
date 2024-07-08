<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Adi Kurniawan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit esse voluptate praesentium sapiente rerum
            reiciendis quo accusantium, suscipit itaque dolore doloribus iste labore autem neque accusamus quis nihil amet
            sit!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Adi Kurniawan',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi id quaerat corporis sequi quos qui corrupti fuga
            odit explicabo nostrum, aut minus. Culpa rerum, porro cum commodi natus necessitatibus pariatur?'
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
