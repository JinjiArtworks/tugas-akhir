<?php

namespace App\Http\Controllers;

use App\Product;
use App\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return dd(Toko::all());
        // jika tidak ada yg login, tetap tampilkan produk
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
                "categories.name AS categories"
            )
                ->join("categories", "categories.id", "=", "products.categories_id")->get();
            return view('users.index', compact('product'));
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
                "categories.name AS categories"
            )
                ->join("categories", "categories.id", "=", "products.categories_id")->get();

            // mengambil query id pada toko.
            $toko = Toko::whereUserId($user)->get();
            // toko sleect  * from toko where user id = userid
            // return dd($user);
            // return dd($toko);
            return view('users.index', compact('product', 'toko'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cate = Category::all();
        // return view('admin.medicine.add', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //     // Add products
        //     if ($request["image"] != null) {
        //         // with image
        //         $destinationPath = '/uploads';
        //         $request["image"]->move(public_path($destinationPath), $request["image"]->getClientOriginalName());
        //         DB::table('products')->insert(
        //             [
        //                 'name' => $request["name"],
        //                 'price' => $request["price"],
        //                 'image' => $request["image"]->getClientOriginalName(),
        //                 'description' => $request["description"],
        //                 'categories_id' => $request["categories_id"],
        //             ]
        //         );
        //     } else {
        //         DB::table('medicines')->insert(
        //             [
        //                 'name' => $request["name"],
        //                 'price' => $request["price"],
        //                 'image' => 'no-profile.png',
        //                 'description' => $request["description"],
        //                 'categories_id' => $request["categories_id"],
        //             ]
        //         );
        //     }

        //     $request->session()->flash('success', 'Add Products Successfull!');
        //     return redirect('/');
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
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, $id)
    // {
    //     // pengecekan update gambar yang sudah tersedia, masuk ke if berarti, gambarnya baru.
    //     // di else, gambarnya pake value sblmx
    //     if ($request["gambar"] != null) {

    //         $destinationPath = '/uploads';
    //         $request["gambar"]->move(public_path($destinationPath), $request["gambar"]->getClientOriginalName());
    //         Products::where('id', $id)
    //             ->update(
    //                 [
    //                     'description' => $request["description"],
    //                     'image' => $request["gambar"]->getClientOriginalName(),
    //                     'name' => $request["name"],
    //                     'price'  => $request["price"],
    //                     'category_id'  => $request["category_id"],
    //                 ]
    //             );
    //     } else {
    //         Products::where('id', $id)
    //             ->update(
    //                 [
    //                     'description' => $request["description"],
    //                     'name' => $request["name"],
    //                     'price'  => $request["price"],
    //                     'category_id'  => $request["category_id"],
    //                 ]
    //             );
    //     }
    //     $request->session()->flash('success', 'Sukses mengubah  product!');
    //     return redirect('/');
    // }
    public function detail($id)
    {
            $product = Product::find($id);
            // dd($m);
            $user = Auth::user()->id;
            $toko = Toko::whereUserId($user)->get();
    
            return view('users.detailproduct', compact('product', 'toko'));
    }

    // public function detailNotif($id)
    // {
    //     $products = Product::find($id);
    //     // dd($m);
    //     return view('users.notification', compact('products'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
