<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\User;
use Session;
use App\Role;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
    // return view('akuntabel.index');
         $akuntabel = User::all();
       

        return view('akuntabel.index',compact('akuntabel'));
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $akuntabel = User::all();
        return view('akuntabel.create',compact('akuntabel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {



            $akuntabel = new User;
            $akuntabel->name = $request['name'];
            $akuntabel->email = $request['email'];
            $akuntabel->password = $request['password'];
            

            $adminRole = Role::where('name','admin')->first();
            $akuntabel->save();
            $akuntabel->attachRole($adminRole);


     

        return redirect()->route('Account.index');

        
           
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
        //

        
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
        //


    User::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Akun berhasil dihapus"
        ]);
        return redirect()->route('Account.index');
    }
    
}
