<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detaill;
use App\Mobil;

class DetaillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detaill::all();
        return view('detail.index',compact('detail','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $mobil = Mobil::all();
        return view('detail.create',compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $detail = new Detaill();
        $detail->keadaan = $request->keadaan;
        $detail->transmisi = $request->transmisi;
        $detail->bahanbkr = $request->bahanbkr;
        $detail->thnklr = $request->thnklr;
        $detail->harga = $request->harga;
        $detail->desk = $request->desk;
        $detail->mobils_id = $request->mobils_id;

        $detail->save();

        return redirect()->route('Detail.index');
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
       $detail = Detaill::findOrFail($id);
        $mobil = Mobil::all();
        return view('detail.edit', compact('detail','mobil'));
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
         $detail = Detaill::findOrFail($id);
        $detail->keadaan = $request->keadaan;
        $detail->transmisi = $request->transmisi;
        $detail->bahanbkr = $request->bahanbkr;
        $detail->thnklr = $request->thnklr;
        $detail->harga = $request->harga;
        $detail->desk = $request->desk;
        $detail->mobils_id = $request->mobils_id;

        $detail->save();

        return redirect()->route('Detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail=Detaill::findOrFail($id);
        $detail->delete();
        return redirect()->route('Detail.index');
    }
}
