<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merekk;
use App\Mobil;
use App\Detaill;
use App\Berita;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       


    }

      public function showperkategori($id){
           	$filter = Mobil::where('merekks_id','=', $id)->paginate(6);
           	return view('frontend.catalog.show')->with(compact('filter'));
           }

    

      public function viewdetail($id){
            $DetailView = Detaill::findOrFail($id);
        
            // dd($DetailView);
            return view('frontend.detail.detail')->with(compact('DetailView'));
           }

           public function berita($id){
            $beritaku = Berita::findOrFail($id);
          
            return view('frontend.berita.berita')->with(compact('beritaku'));
           }

}
    