<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\DocumentResource;
use App\Models\Documents;

class DocumentController extends Controller
{
    public function index()
    {
        return DocumentResource::collection(Documents::all());
    }
}
