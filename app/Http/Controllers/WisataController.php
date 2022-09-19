<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class wisataController extends Controller
{
    public function index(){
        return view('wisata', [
            "title" => "Wisata",
            'wisata' => Wisata::all()
        ]);
    }
}
