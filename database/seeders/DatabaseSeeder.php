<?php

namespace Database\Seeders;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::factory(20)->create();

        Post::create([
            'title' => 'judul keempat',
            'slug' => 'Judul-kelima',
            'body' => 'body kelima',
        ]);
        Post::create([
            'title' => 'judul keenam',
            'slug' => 'Judul-keenam',
            'body' => 'body ketujuh',
        ]);
        Post::create([
            'title' => 'judul kedelapan',
            'slug' => 'Judul-kedelapan',
            'body' => 'body kedelapan',
        ]);
        Post::create([
            'title' => 'judul kesembilan',
            'slug' => 'Judul-kesembilan',
            'body' => 'body kesembilan',
        ]);
        Post::create([
            'title' => 'judul kesepuluh',
            'slug' => 'Judul-kesepuluh',
            'body' => 'body kesepuluh',
        ]);
    }
}
