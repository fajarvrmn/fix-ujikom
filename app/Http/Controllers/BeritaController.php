<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $berita = Berita::all();
        

        return view('berita.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::all();
        return view('berita.create',compact('berita'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $berita = new Berita();
       if ($request->hasfile('foto')) {
            $beritas = $request->file('foto');
            $extension = $beritas->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $beritas->move($destinationPath, $filename);
            $berita->foto = $filename;
        }
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        
        $berita->save();

        return redirect()->route('Berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::all();
  
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $berita=Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('Berita.index');

    }
}
