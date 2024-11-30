<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\URL;
use Illuminate\Http\Request;

class ShortenURLController extends Controller
{
    public function index(Request $request)
    {
        // $shortUrls = URL::withTrashed()->select('original_url', 'short_code', 'expires_at', 'deleted_at')->latest()->paginate(10);
        return view('admin.shortUrl');
    }
}
