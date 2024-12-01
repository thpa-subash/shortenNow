<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateShortenUrl;
use App\Http\Resources\admin\ShortenURLResource as AdminShortenURLResource;
use App\Http\Resources\ShortenURLResource;
use App\Services\URLService;
use Exception;
use Illuminate\Http\Request;

class ShortenURLController extends Controller
{
    public function __construct(protected URLService $urlService) {}
    public function index(Request $request)
    {
        try {
            return AdminShortenURLResource::collection($this->urlService->getAllURL($request->get('search'), $request->get('perPage')));
        } catch (Exception $exception) {
            return response()->json(['status' => $exception->getCode(), 'message' => $exception->getMessage()]);
        }
    }
    public function delete($short_code)
    {
        try {
            $url = $this->urlService->findOrFailByShortCode($short_code);
            if (!$url) {
                throw new Exception("URL not found", 404);
            }
            $this->urlService->deleteByShortCode($short_code);
            return response()->json(['status' => 410, "message" => "Shortened URL has been deleted"]);
        } catch (Exception $exception) {
            return response()->json(['status' => $exception->getCode(), 'message' => $exception->getMessage()]);
        }
    }
}
