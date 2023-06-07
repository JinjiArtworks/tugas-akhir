<?php

namespace App\Http\Controllers;

use App\Seragam;
use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeragamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()){
            $seragams = Seragam::Select(
                "seragams.id",
                "seragams.name",
                "seragams.image",
                "stores.name as st",
                "stores.phone as sp",
                "stores.address as sa"
            )
                ->join("stores", "stores.id", "=", "seragams.stores_id")->get();
            return view('users.seragam', compact('seragams'));
        }
        else{
            $seragams = Seragam::Select(
                "seragams.id",
                "seragams.name",
                "seragams.image",
                "stores.name as st",
                "stores.phone as sp",
                "stores.address as sa"
            )
                ->join("stores", "stores.id", "=", "seragams.stores_id")->get();
            $user = Auth::user()->id;
            $toko = Toko::whereUserId($user)->get();
            return view('users.seragam', compact('seragams','toko'));
            // user check
        }
      
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
        //
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
    }
}
