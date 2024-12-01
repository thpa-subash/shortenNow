<?php

namespace App\Http\Controllers\api\public;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateShortenUrl;
use App\Http\Resources\ShortenURLResource;
use App\Services\URLService;
use Exception;
use Illuminate\Http\Request;

class PublicShortenURLController extends Controller
{
    public function __construct(protected URLService $urlService) {}
    public function __invoke(CreateShortenUrl $createShortenUrl)
    {
        try {
            $validatedData = $createShortenUrl->validated();
            $url =  $this->urlService->createURL($validatedData);
            return ShortenURLResource::make($url);
        } catch (Exception $exception) {
            return response()->json(['status' => $exception->getCode(), 'message' => $exception->getMessage()]);
        }
    }
}
