<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs =  Blog::all();
        return view('frontend.blog.index' , compact('blogs'));
    }
    public function show($id){
        $blog = Blog::find($id);
        return view('frontend.blog.show' , compact('blog'));
    }
}
