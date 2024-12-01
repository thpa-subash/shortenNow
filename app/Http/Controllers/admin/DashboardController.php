<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\URL;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $totalUser = User::count();
        $totalURL = URL::count();
        $latestURLs = URL::latest()->limit(7)->get();
        $topURLs = URL::orderBy('no_of_clicks', 'desc')->limit(7)->get();
        return view('admin.dashboard', compact('totalUser', 'totalURL', 'latestURLs', 'topURLs'));
    }
}
