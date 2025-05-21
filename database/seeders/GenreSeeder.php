<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            'Action', 'Adventure', 'Anthology', 'Art', 'Autobiography',
            'Biography', 'Children', 'Classic', 'Comedy', 'Coming-of-Age',
            'Crime', 'Detective', 'Drama', 'Dystopian', 'Education',
            'Epic', 'Essay', 'Fairy Tale', 'Family Saga', 'Fantasy',
            'Fiction', 'Folklore', 'Gothic', 'Graphic Novel', 'Historical',
            'Horror', 'Humor', 'Inspirational', 'Journal', 'Literary Fiction',
            'Magic Realism', 'Memoir', 'Mystery', 'Mythology', 'Narrative Nonfiction',
            'Paranormal', 'Philosophy', 'Poetry', 'Political Fiction', 'Romance',
            'Satire', 'Science Fiction', 'Self-Help', 'Short Story', 'Spiritual',
            'Sports', 'Supernatural', 'Thriller', 'Travel', 'Western'
        ];

        foreach ($genres as $genre) {
            Genre::create(['name' => $genre]);
        }
    }
}
