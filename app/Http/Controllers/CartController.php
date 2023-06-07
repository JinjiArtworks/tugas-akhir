<?php

namespace App\Http\Controllers;

use App\Product;
use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function cart()
    {
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $cart = session()->get('cart');
        // dd($m);
        return view('users.cart', compact('cart', 'toko'));
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart');
        // kalau barang yang diinginkan blm ada di cart, masuk ke IF.. 
        if (!isset($cart[$id])) {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "description" => $product->description,
                "quantity" => $request->post('quantity'), // req.post untuk ambil quantity
                "total_price" => $request->post('quantity') * $product->price
            ];
        }
        // kalo produck tsb sudah ada, jadi ditambah dengan data yg baru, dan tidak di timpa.
        else {
            $cart[$id]["quantity"] += $request->post('quantity');
            $cart[$id]["total_price"] += $request->post('quantity') * $cart[$id]["price"];
        }
        session()->put('cart', $cart);
        return redirect('/cart')->with('success', 'Produk berhasil ditambahkan kedalam keranjang');

        // $request->session()->forget('cart');
    }
    public function removeFromCart($id)
    {
        $p = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product berhasil dihapus dari keranjang');
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
