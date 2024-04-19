<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Http\Controllers\AuthorizationController as PassportAuthorizationController;
use Illuminate\Http\Request;
use Psr\Http\Message\ServerRequestInterface;

// Import the ServerRequestInterface
use Laravel\Passport\ClientRepository;
use Laravel\Passport\TokenRepository;

class CustomAuthorizationController extends PassportAuthorizationController
{
    // Adjust the method signature to match the AuthorizationController's authorize method
    public function authorize(ServerRequestInterface $psrRequest, Request $request, ClientRepository $clients, TokenRepository $tokens)
    {
//        return $clients;
//        return $client_id = $request->query('response_type');
        $client_id = $request->query('client_id') ?? null;
        $redirect_uri = $request->query('redirect_uri') ?? null;
        $response_type = $request->query('response_type') ?? null;

        // Ensure there is an authenticated user
        if (!$request->user()) {
            // Handle unauthenticated user, for example, redirect them to the login page
            return redirect()->route('login', ['client_id' => $client_id, 'redirect_uri' => $redirect_uri, 'response_type' => $response_type]);
        }

        // Check if the user's email is verified
        if (!$request->user()->email_verified_at) {
            // User's email is not verified, redirect them to the home page
            return redirect()->route('home')->with('error', 'Your email address is not verified. Please verify your email.');
        }
        $user = Auth::user();

        // Access user information
        $userId = $user->id;
        $userEmail = $user->email;

        // Pass user information as authorization request parameters
        $request->merge([
            'user_id' => $userId,
            'user_email' => $userEmail,
        ]);
//        return $request;
        // Call parent authorize method to proceed with regular authorization flow
        return parent::authorize($psrRequest, $request, $clients, $tokens);
    }
}
