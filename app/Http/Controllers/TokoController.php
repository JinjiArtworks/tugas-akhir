<?php

namespace App\Http\Controllers;

use App\Category;
use App\Orders;
use App\Product;
use App\Stores;
use App\Toko;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        if (!Auth::check()) {
            $product = Product::Select(
                "products.id",
                "products.name",
                "products.image",
                "products.price",
                "products.stock",
                "products.stores_id",
                "products.categories_id",
                "categories.name as cName"
            )
                ->join("categories", "categories.id", "=", "products.categories_id")
                ->where("products.stores_id", "=", $user)->get();

            return view('admin.produk', compact('product'));
        }
        // user check
        else {

            $product = Product::Select(
                "products.id",
                "products.name",
                "products.image",
                "products.price",
                "products.stock",
                "products.stores_id",
                "products.categories_id",
                "categories.name as cName"
            )
                ->join("categories", "categories.id", "=", "products.categories_id")
                ->where("products.stores_id", "=", $user)->get();

            // ->where("products.stores_id", "=", "stores_userid")->get();

            // mengambil query id pada toko.
            $toko = Toko::whereUserId($user)->get();
            // toko sleect  * from toko where user id = userid
            // return dd($user);
            // return dd($toko);
            return view('admin.produk', compact('product', 'toko'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();

        return view('admin.action.addProduk', compact('cat', 'toko'));
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;
        if ($request["image"] != null) {
            $destinationPath = '/uploads';
            $request["image"]->move(public_path($destinationPath), $request["image"]->getClientOriginalName());
            DB::table('products')->insert(
                [
                    'name' => $request["name"],
                    'description' => $request["description"],
                    'image' => $request["image"]->getClientOriginalName(),
                    'price' => $request["price"],
                    'stock' => $request["stock"],
                    'categories_id' => $request["categories_id"],
                    "stores_id" => $user
                ]

            );
        } else {
            DB::table('products')->insert(
                [
                    'name' => $request["name"],
                    'description' => $request["description"],
                    'image' => "no-profile.png",
                    'price' => $request["price"],
                    'stock' => $request["stock"],
                    'categories_id' => $request["categories_id"],
                    "stores_id" => $user

                ]
            );
        }
        $request->session()->flash('success', 'Add Product Successfull!');
        return redirect('/dashboard');
    }

    public function edit($id)
    {
        $cat = Category::all();
        $product = Product::find($id);
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();

        return view('admin.action.editProduk', compact('product', 'cat', 'toko'));
    }

    public function update(Request $request, $id)
    {
        if ($request["gambar"] != null) {

            $destinationPath = '/uploads';
            $request["gambar"]->move(public_path($destinationPath), $request["gambar"]->getClientOriginalName());
            Product::where('id', $id)
                ->update(
                    [
                        'image' => $request["gambar"]->getClientOriginalName(),
                        'name' => $request["name"],
                        'categories_id'  => $request["categories_id"],
                        'description' => $request["description"],
                        'price'  => $request["price"],
                        'stock'  => $request["stock"],
                    ]
                );
        } else {
            Product::where('id', $id)
                ->update(
                    [
                        'name' => $request["name"],
                        'categories_id'  => $request["categories_id"],
                        'description' => $request["description"],
                        'price'  => $request["price"],
                        'stock'  => $request["stock"],
                    ]
                );
        }
        $request->session()->flash('success', 'Product changed has been successfully!!!');
        return redirect('/dashboard');
    }
    // profile admin
    public function profile()
    {
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $store = Stores::select(
            "stores.id",
            "stores.name",
            "stores.image",
            "stores.address",
            "stores.phone",
            "stores.description",
        )
            ->where("stores.id", "=", $user)->get();

        return view('admin.profile', compact('store', 'toko'));
    }
    public function storeProfile(Request $request)
    {
        $user = Auth::user()->id;
        if ($request["image"] != null) {
            $destinationPath = '/uploads';
            $request["image"]->move(public_path($destinationPath), $request["image"]->getClientOriginalName());
            DB::table('stores')->insert(
                [
                    'image' => $request["gambar"]->getClientOriginalName(),
                    'name' => $request["name"],
                    'address'  => $request["address"],
                    'phone'  => $request["phone"],
                    'description' => $request["description"],
                    "stores_id" => $user

                ]

            );
        } else {
            DB::table('stores')->insert(
                [
                    'name' => $request["name"],
                    'address'  => $request["address"],
                    'phone'  => $request["phone"],
                    'description' => $request["description"],
                    "stores_id" => $user
                ]
            );
        }
        $request->session()->flash('success', 'Add Product Successfull!');
        return redirect('/dashboard');
    }
    public function editProfile($id)
    {
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $store = Stores::find($id);

        return view('admin.action.editProfile', compact('store', 'toko'));
    }

    public function updateProfile(Request $request, $id)
    {
        if ($request["gambar"] != null) {

            $destinationPath = '/uploads';
            $request["gambar"]->move(public_path($destinationPath), $request["gambar"]->getClientOriginalName());
            Stores::where('id', $id)
                ->update(
                    [
                        'image' => $request["gambar"]->getClientOriginalName(),
                        'name' => $request["name"],
                        'address'  => $request["address"],
                        'phone'  => $request["phone"],
                        'description' => $request["description"],
                    ]
                );
        } else {
            Stores::where('id', $id)
                ->update(
                    [
                        'name' => $request["name"],
                        'address'  => $request["address"],
                        'phone'  => $request["phone"],
                        'description' => $request["description"],
                    ]
                );
        }
        $request->session()->flash('success', 'Profile changed has been successfully!!!');
        return redirect('/profile');
    }
    public function removeProduct($id)
    {
        try {
            DB::table('products')->where('id', '=', $id)->delete();
            return redirect()->back()->with('delete', 'Data Products Berhasil Dihapus');
        } catch (\PDOException $e) {
        }
    }
    // End Product Controller


    // ReportController
    public function report(Product $product)
    {
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $data = DB::select("SELECT p.image, p.name AS 'pName', od.order_number, u.name, od.order_date,p.price,od.order_qty,od.status FROM products p INNER JOIN orders od  on p.id = od.product_id  INNER JOIN users u on  
        od.user_id = u.id GROUP BY p.image, p.name  , od.order_number, u.name, od.order_date, p.price,od.order_qty,od.status ORDER BY order_number desc");

        return view('admin.report', compact('data', 'toko'));
    }


    // History Controller
    public function historyOrder(Product $product)
    {
        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $order = Orders::select(
            "orders.id",
            "users.id as uId",
            "users.name as uName",
            "orders.order_date",
        )
            ->join("users", "users.id", "=", "orders.user_id")
            ->join("stores", "stores.id", "=", "orders.stores_id")
            ->where("stores.id", "=", $user)->get();
        return view('admin.history', compact('order', 'toko'));
    }


    public function historyDetail($id)
    {

        $user = Auth::user()->id;
        $toko = Toko::whereUserId($user)->get();
        $order = Orders::select(
            "orders.order_qty",
            "orders.user_id",
            "products.name as pName",
            "products.price as pPrice",
            "products.image as pImage",
            "users.name as pUname",
            "users.id as pUid",

        )
            ->join("products", "products.id", "=", "orders.product_id")
            ->join("users", "users.id", "=", "orders.user_id")
            ->where("users.id", "=", $id)->get();
        // dd($transaction);
        return view('admin.historydetail', compact('order', 'toko'));
    }
}
