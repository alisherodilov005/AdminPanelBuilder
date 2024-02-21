<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\ProductsResource;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return ProductsResource::collection(Products::all());
    }
}
