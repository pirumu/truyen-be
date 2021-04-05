<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\API as APIRequests;

class AuthController extends Controller
{
    public function register(APIRequests\RegisterRequest $registerRequest)
    {
    }

    public function login(APIRequests\LoginRequest $loginRequest)
    {
        $credentials = $loginRequest->only('email', 'password');

        if (! $token = auth('api')->attempt($credentials)) {
            return $this->getResponse(
                Response::HTTP_UNAUTHORIZED,
                Response::$statusTexts[Response::HTTP_UNAUTHORIZED]
            );
        }

        return $this->getResponse(
            Response::HTTP_OK,
            Response::$statusTexts[Response::HTTP_OK],
            [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth('api')->factory()->getTTL() * 60,
            ]
        );
    }

    public function forgetPassword()
    {
        // code...
    }

    public function logout()
    {
        auth('api')->logout();

        return $this->getResponse(
            Response::HTTP_OK,
            Response::$statusTexts[Response::HTTP_OK]
        );
    }
}
