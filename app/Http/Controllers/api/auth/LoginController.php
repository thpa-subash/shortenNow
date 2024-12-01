<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $loginRequest)
    {
        try {

            $validatedData = $loginRequest->validated();
            $user = User::where('email', $validatedData['email'])->first();
            if (! $user || ! Hash::check($validatedData['password'], $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

            return response()->json(['status' => 200, 'user' => $user, 'token' => $user->createToken("shortenURL")->plainTextToken]);
        } catch (Exception $exception) {
            return response()->json([
                'status' => $exception->getCode(),
                'message' => $exception->getMessage()
            ]);
        }
    }
}
