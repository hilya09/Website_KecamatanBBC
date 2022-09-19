<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('dashboard.post.posts', [
                "title" => "Berita",
                'berita' => Post::all()
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
        // return $request;
        $validatedData = $request -> validate([
            'judul' => 'required|max:225',
            'penulis' => 'required|max:225',
            'publish_at' => 'required|max:225',
            'body' => 'required',
            'foto' => 'image|file|max:1024'
        ]);
        
        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        
        Post::create($validatedData);
 
        return redirect('/post')->with('addSuccess', 'Berita Baru Berhasil ditambahkan');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('berita-details', [
            "title" => "Berita",
            "berita" => Post::find($id), /**buat show berita berdasarkan id */
            "beritas" => Post::all() /**buat show berita semuanya disidebar */
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        // dd($desa);
        return view('dashboard.post.editpost',[
            "title" => "Berita",
            'posts' => $posts
        ], compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);

        $rules = [
            'judul' => 'required|max:225',
            'penulis' => 'required|max:225',
            'publish_at' => 'required|max:225',
            'body' => 'required',
            'foto' => 'image|file|max:1024',
        ];
      
        $validatedData =$request-> validate($rules);

        if($request->file('foto')){
            $validatedData['foto']= $request->file('foto')->store('post-images');
        }

        Post::where('id', $posts->id)->update($validatedData);

        return redirect('/post')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findorFail($id);
        Storage::delete('public/post-images/'.$posts->foto);
        $posts->delete();

        if($posts){
            return redirect('/post')->with('delSuccess', 'Berita berhasil dihapus');
        }
    }
}
