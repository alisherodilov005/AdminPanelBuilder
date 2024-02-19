<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return  view('frontend.products.index'  , compact("products"));
    }
    public function show($id){
        $product = Products::find($id);
        return view('frontend.products.show' , compact('product'));
    }
}
