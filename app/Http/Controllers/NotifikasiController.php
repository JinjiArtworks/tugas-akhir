<?php

namespace App\Http\Controllers;

use App\Product;
use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            $product = Product::Select(
                "products.id",
                "products.name",
                "products.description",
                "products.image",
                "products.price",
                "products.terjual",
                "products.rating",
                "products.stock",
                "orders.order_number AS on",
                "orders.order_date AS od",
                "orders.status AS os"

            )
                ->join("orders", "orders.product_id", "=", "products.id")->get();
            return view('users.notification', compact('product'));
        }
        // user check
        else {
            $user = Auth::user()->id;

            $product = Product::Select(
                "products.id",
                "products.name",
                "products.description",
                "products.image",
                "products.price",
                "products.terjual",
                "products.rating",
                "products.stock",
                "orders.order_number AS on",
                "orders.order_date AS od",
                "orders.status AS os"

            )
                ->join("orders", "orders.product_id", "=", "products.id")->get();
            // mengambil query id pada toko.
            $toko = Toko::whereUserId($user)->get();
            // toko sleect  * from toko where user id = userid
            // return dd($user);
            // return dd($toko);
            return view('users.notification', compact('product', 'toko'));
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
