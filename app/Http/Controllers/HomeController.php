<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Checkout;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function add($id){
        $product = Product::find($id);

        Checkout::create([
            'category_id' => $product->category_id,
            'nama' => $product->nama,
            'harga' => $product->harga
        ]);

        return redirect('/home');
    }

    public function checkout(){
        $checkouts = Checkout::all();
        return view('checkout', compact('checkouts'));
    }

    public function confirm(Request $request){

        // Confirm::create([
        //     'alamat' => $request->alamat,
        //     'pos' => $request->pos
        // ]);

        return redirect('/home');
    }
}
