<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisatadetailsController extends Controller
{
    public function index(){
        return view('wisata-details', [
            "title" => "Wisata",
            'wisata' => Wisata::all()
        ]);
    }
}
