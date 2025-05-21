<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Izinkan mass assignment untuk name dan description
    protected $fillable = ['name', 'description'];
}
