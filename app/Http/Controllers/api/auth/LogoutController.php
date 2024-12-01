<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            auth()->user()->tokens()->delete();
            return response()->json(['status' => 200, "message" => "User Logout Successfully"]);
        } catch (Exception $exception) {
            return response()->json([
                'status' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}
