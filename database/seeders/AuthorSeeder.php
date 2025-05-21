<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $authors = [
            'Pramoedya Ananta Toer',
            'Chairil Anwar',
            'Andrea Hirata',
            'Dewi Lestari',
            'Tere Liye',
            'Habiburrahman El Shirazy',
            'Sapardi Djoko Damono',
            'Helvy Tiana Rosa',
            'Laksmi Pamuntjak',
            'Ayuwidya',
            'Ahmad Tohari',
            'Seno Gumira Ajidarma',
            'Leila S. Chudori',
            'Asma Nadia',
            'Putu Wijaya',
            'Iksaka Banu',
            'Fira Basuki',
            'Ziggy Zezsyazeoviennazabrizkie',
            'Mira W.',
            'Remy Sylado',
            'Ratih Kumala',
            'Kuntowijoyo',
            'NH Dini',
            'Intan Paramaditha',
            'Agus Noor',
            'Clara Ng',
            'Gola Gong',
            'WS Rendra',
            'Ajip Rosidi',
            'Yusran Effendi',
            'Triyanto Triwikromo',
            'Idrus',
            'Joko Pinurbo',
            'Kiki Sulistyo',
            'Bagus Takwin',
            'Gunawan Mohammad',
            'Budi Darma',
            'Hamsad Rangkuti',
            'Djenar Maesa Ayu',
            'Lily Yulianti Farid',
            'Afrizal Malna',
            'Toeti Heraty',
            'Nurhayati Sri Hardini Siti Nukatin',
            'Martin Aleida',
            'Ayu Utami',
            'Okky Madasari',
            'Acep Zamzam Noor',
            'Ben Sohib',
            'Raditya Dika'
        ];

        foreach ($authors as $author) {
            Author::create(['name' => $author]);
        }
    }
}
