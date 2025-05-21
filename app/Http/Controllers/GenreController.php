<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    // Menampilkan semua genre
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'data' => $genres
        ]);
    }

    // Menyimpan genre baru
    public function store(Request $request)
    {
        // 1. Validasi
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "description" => "required|string"
        ]);

        // 2. Cek data yang error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // 3. Simpan data
        $genre = Genre::create([
            "name" => $request->name,
            "description" => $request->description
        ]);

        // 4. Response berhasil
        return response()->json([
            "success" => true,
            "message" => "Resource created successfully!",
            "data" => $genre
        ], 201);
    }
}
