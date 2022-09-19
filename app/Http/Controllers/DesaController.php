<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function index(){
        return view('desa', [
            "title" => "Desa",
            'desa' => Desa::all()
        ]);
    }
}
