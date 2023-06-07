<?php

namespace App\Http\Controllers;

use App\Category;
use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            $kategori = Category::all();
            return view('users.kategori', compact('kategori'));
        }
        // user check
        else {
            $user = Auth::user()->id;

            $kategori = Category::Select(
                "categories.id",
                "categories.name",
                "categories.image",
                "users.id as uId"
            )
                ->join("users", "users.id", "=", "categories.id")->get();

            // mengambil query id pada toko.
            $toko = Toko::whereUserId($user)->get();
            // toko sleect  * from toko where user id = userid
            // return dd($user);
            // return dd($toko);
            return view('users.kategori', compact('kategori', 'toko'));
        }
    }
    public function detailKategori($id)
    {
        if (!Auth::check()) {
            $kategori = Category::Select(
                "categories.id",
                "categories.name",
                "categories.image",
                "products.id as pId",
                "products.name as pName",
                "products.description as pDesc",
                "products.image as pImage",
                "products.price as pPrice",
                "products.terjual as pTerjual",
                "products.rating as pRating",
                "products.stock as pStock",
                "products.categories_id as pCid "
            )
                ->join("products", "products.categories_id", "=", "categories.id")->get();
            return view('users.detailkategori', compact('kategori'));
        }
        // user check
        else {
            $user = Auth::user()->id;
            $kategori = Category::Select(
                "categories.id",
                "categories.name",
                "categories.image",
                "products.id as pId",
                "products.name as pName",
                "products.description as pDesc",
                "products.image as pImage",
                "products.price as pPrice",
                "products.terjual as pTerjual",
                "products.rating as pRating",
                "products.stock as pStock",
                "products.categories_id as pCid ",
                
            )
                ->join("products", "products.categories_id", "=", "categories.id")
                ->where("categories.id", "=",$id)->get();


            // mengambil query id pada toko.
            $toko = Toko::whereUserId($user)->get();
            // toko sleect  * from toko where user id = userid
            // return dd($user);
            // return dd($toko);
            return view('users.detailkategori', compact('kategori', 'toko'));
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
