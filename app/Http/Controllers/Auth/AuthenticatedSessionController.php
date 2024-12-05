<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): Response
    {
        $request->authenticate();

        $isEmployee = User::find(auth()->id())->employee()->exists();

        $token = auth()
            ->user()
            ->createToken($request->email, [$isEmployee ? 'employee' : 'attendee'])
            ->plainTextToken;

        return response([
            'token' => $token,
        ], 200);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        $request->user()
            ->currentAccessToken()
            ->delete();

        return response()
            ->noContent();
    }
}
