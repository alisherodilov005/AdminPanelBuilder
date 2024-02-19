<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }
    public function create(Request $request)
    {
        $request->request->add(['status'=>0]);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'number' => 'required',
        ]);
        
        Contact::create($request->all());
        return back()->with('msg' ,"Ma'lumotlar yuborildi");
    }
}
