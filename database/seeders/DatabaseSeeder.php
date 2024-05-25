<?php

namespace Database\Seeders;
use App\Models\Author;
use App\Models\Biography;
use App\Models\Book;
use App\Models\Genre;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        {
            Author::factory(10)->create()->each(function ($author) {
                Biography::factory()->create(['author_id' => $author->id]);
            });

            $genres = Genre::factory(5)->create();
            Book::factory(30)->create()->each(function ($book) use ($genres) {
                $book->genres()->attach($genres->random(rand(1, 3))->pluck('id')->toArray());
            });
        }
    }
}
