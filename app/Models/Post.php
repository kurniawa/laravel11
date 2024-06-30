<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    static function manual_all(): array
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

        return $posts;
    }

    static function manual_find($slug): array
    {
        // return Arr::first(static::manual_all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        return Arr::first(static::manual_all(), fn ($post) => $post['slug'] == $slug);
    }
}
