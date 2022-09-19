<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wisata;

use App\Models\Post;

class BerandaController extends Controller
{
    public function index(){
        return view('index', [
        "title" => "Beranda",
     
        "wisata" => Wisata::all(),
        "berita" => Post::all()
        ]);
    }

}
