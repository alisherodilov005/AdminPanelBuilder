<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuestTracking;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $repeatedTitle = GuestTracking::select('url', DB::raw('COUNT(*) as title_count'))
        ->groupBy('url')
        ->orderByDesc('title_count')
        ->get();

        return view('admin.index', compact('repeatedTitle'));
    }
}
