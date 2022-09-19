<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.desa.adddesa', [
            "title" => "Desa",
            'desas' => Desa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'kodewilayah' => 'required|max:225',
            'namadesa' => 'required|max:225',
            'url' => 'required|max:225',
            'luaswil' => 'required|max:225',
        ]);

        Desa::create($validatedData);

        return redirect('/adddesa')->with('addSuccess', 'Desa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = Desa::find($id);
        // dd($desa);
        return view('dashboard.desa.editdesa',[
            "title" => "Desa",
            'desa' => $desa
        ], compact('desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $desa = Desa::find($id);

        $rules = [
            'kodewilayah' => 'required|max:225',
            'namadesa' => 'required|max:225',
            'url' => 'required|max:225',
            'luaswil' => 'required|max:225',
        ];

        $validatedData =$request-> validate($rules);

        Desa::where('id', $desa->id)->update($validatedData);

        return redirect('/adddesa')->with('success', 'Desa berhasil diperbaharui');
    }   
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $desa = Desa::findOrFail($id);
        $desa->delete();
        return redirect('/adddesa')->with('delSuccess', 'Desa berhasil dihapus');
    }
}
