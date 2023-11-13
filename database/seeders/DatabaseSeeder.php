<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\Review;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Book::factory(33)->create()->each(function($book){
            $numberReviews = random_int(5,30);
            \App\Models\Review::factory()->count($numberReviews)->good()->for($book)->create();
        });
        \App\Models\Book::factory(20)->create()->each(function($book){
            $numberReviews = random_int(5,30);
            \App\Models\Review::factory()->count($numberReviews)->average()->for($book)->create();
        });
        \App\Models\Book::factory(34)->create()->each(function($book){
            $numberReviews = random_int(5,30);
            \App\Models\Review::factory()->count($numberReviews)->bad()->for($book)->create();
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
