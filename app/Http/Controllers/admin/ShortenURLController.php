<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\URL;
use Illuminate\Http\Request;

class ShortenURLController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.shortUrl');
    }
}
