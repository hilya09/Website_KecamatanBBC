<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BeritaController extends Controller
{
    public function index(){
        return view('berita', [
            "title" => "Berita",
            'berita' => Post::all()
        ]);
    }
}
