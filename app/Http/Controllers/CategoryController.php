<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('category');
    }

    public function store(Request $request){
        Category::create([
            'name' => $request->category
        ]);

        return redirect('/category');
    }
}
