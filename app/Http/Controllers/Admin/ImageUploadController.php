<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'upload' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $imageName = time().'.'.$request->upload->extension();

        $request->upload->move(public_path('storage/images'), $imageName);

        return response()->json([
            'url' => asset('storage/images/'.$imageName),
        ]);
    }
}
