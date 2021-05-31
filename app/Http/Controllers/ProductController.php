<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request){
        
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/images'), $new_name);

        Product::create([
            'category_id' => $request->category_id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'image' => $new_name
        ]);

        return redirect('/create');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('edit', compact('product'), compact('categories'));
    }

    public function update(Request $request, $id){
        
        $image = $request->file('image');
        $new_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/images'), $new_name);

        Product::where('id', $id)
            ->update([
                'category_id' => $request->category_id,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
                'image' => $new_name
            ]);
        
            return redirect('/');
    } 

    public function destroy($id){
        Product::destroy($id);
        return redirect('/');
    }
}
