<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Merekk;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all();
        $merk = Merekk::all();

        return view('mobil.index',compact('mobil','merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merekk::all();
        return view('mobil.create',compact('merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobil = new Mobil();
        $mobil->nama = $request->nama;
        $mobil->merekks_id = $request->merekks_id;
        $mobil->tipe = $request->tipe;
        $mobil->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $mobils = $request->file('foto');
            $extension = $mobils->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $mobils->move($destinationPath, $filename);
            $mobil->foto = $filename;
        }
        $mobil->save();

        return redirect()->route('Catalog.index');
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
         $merk = Merekk::all();
       $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil','merk'));
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
       $mobil = Mobil::findOrFail($id);
        $mobil->nama = $request->nama;
       $mobil->merekks_id = $request->merekks_id;
        $mobil->tipe = $request->tipe;
        $mobil->foto = $request->foto;
        if ($request->hasfile('foto')) {
            $mobils = $request->file('foto');
            $extension = $mobils->getClientOriginalExtension();
            $filename = str_random(6).'.'.$extension;
            $destinationPath = public_path().'/img';
            $mobils->move($destinationPath, $filename);
            $mobil->foto = $filename;
        }
        $mobil->save();
                return redirect()->route('Catalog.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $mobil=Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('Catalog.index');

    }
}
