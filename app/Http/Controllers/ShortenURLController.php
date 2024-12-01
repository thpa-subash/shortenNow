<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShortenUrl;
use App\Models\URL;
use App\Services\URLService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShortenURLController extends Controller
{
    public function __construct(protected URLService $urlService) {}
    public function index(Request $request)
    {
        return view('home');
    }

    public function store(CreateShortenUrl $createShortenUrl)
    {
        try {
            $validatedData = $createShortenUrl->validated();
            $url =  $this->urlService->createURL($validatedData);
            return back()->with('shortURL', $url->short_code);
        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }

    public function redirectToOrginalUrl($url)
    {
        $shortURL = $this->urlService->findOrFailByShortCode($url);
        if (!$shortURL) {
            abort('404', 'URL not found');
        }
        if (isset($shortURL->deleted_at) || (isset($shortURL->expires_at) && $this->urlService->checkURLExpires($shortURL->id))) {
            abort(410, 'This shortened URL has been deleted');
        }
        // use withoutTimestamps
        $shortURL->increment('no_of_clicks');
        return redirect()->to($shortURL->original_url, 302);
    }
}
