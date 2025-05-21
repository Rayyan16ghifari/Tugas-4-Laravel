<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Nama tabel kalau beda dari konvensi (books)
    // protected $table = 'books';

    // Kolom yang boleh diisi secara massal (mass assignable)
    protected $fillable = [
        'title',
        'author_id',
        'genre_id',
        'published_year',
        'description',
        'price'
    ];

    // Relasi: satu buku punya satu author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi: satu buku punya satu genre
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
