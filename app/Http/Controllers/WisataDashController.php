<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class WisataDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.wisata.addwisata', [
            "title" => "Wisata",
            'wisata' => Wisata::all()
        
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
            'namawisata' => 'required|max:225',
            'alamat' => 'required|max:225',
            'telp' => 'required|max:12',
            'harga' => 'required|max:225',
            'jamopr' => 'required|max:225',
            'body' => 'required',
            'foto' => 'image|file|max:1024',
            'fotodua' => 'image|file|max:1024',
            'fototiga' => 'image|file|max:1024',
            'fotoempat' => 'image|file|max:1024'
        ]);

        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }
        if($request->file('fotodua')){
            $validatedData['fotodua']= $request->file('fotodua')->store('post-images');
        }
        if($request->file('fototiga')){
            $validatedData['fototiga']= $request->file('fototiga')->store('post-images');
        }
        if($request->file('fotoempat')){
            $validatedData['fotoempat']= $request->file('fotoempat')->store('post-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Wisata::create($validatedData);

        return redirect('/addwisata')->with('addSuccess', 'Wisata baru berhasil ditambahkan');

        // dd ($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('wisata-details', [
            "title" => "Wisata",
            "wisata" => Wisata::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        // dd($desa);
        return view('dashboard.wisata.editwisata',[
            "title" => "Wisata",
            'wisata' => $wisata
        ], compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::find($id);

        $rules = [
            'namawisata' => 'required|max:225',
            'alamat' => 'required|max:225',
            'telp' => 'required|max:12',
            'harga' => 'required|max:225',
            'jamopr' => 'required|max:225',
            'body' => 'required',
            'foto' => 'image|file|max:1024',
            'fotodua' => 'image|file|max:1024',
            'fototiga' => 'image|file|max:1024',
            'fotoempat' => 'image|file|max:1024',
        ];

        $validatedData =$request-> validate($rules);
        
        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }
        if($request->file('fotodua')){
            $validatedData['fotodua']= $request->file('fotodua')->store('post-images');
        }
        if($request->file('fototiga')){
            $validatedData['fototiga']= $request->file('fototiga')->store('post-images');
        }
        if($request->file('fotoempat')){
            $validatedData['fotoempat']= $request->file('fotoempat')->store('post-images');
        }

        Wisata::where('id', $wisata->id)->update($validatedData);

        return redirect('/addwisata')->with('success', 'Wisata berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findorFail($id);
        
        if($wisata->image){
            Storage::disk('local')->delete('public/post-images/'.$wisata->foto);
        }
        
        $wisata->delete();

        if($wisata){
            return redirect('/addwisata')->with('delSuccess', 'Data wisata berhasil dihapus');
        }
    }
}
