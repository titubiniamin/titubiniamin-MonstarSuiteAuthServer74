<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class CustomVerificationController extends VerificationController
{
    use VerifiesEmails;

    /**
     * Redirect the user after verification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectPath()
    {
        $redirectUrl = 'http://10.3.2.51:8003/oauth/authorize';

        // Append query parameters
        $queryParams = http_build_query([
            'client_id' => $request->client_id ?? 2,
            'redirect_uri' => $request->redirect_uri ?? 'http://10.3.2.51:8002/oauth/callback',
            'response_type' => $request->code ?? 'code',
        ]);
//        $queryParams = http_build_query([
//            'client_id' => $request->client_id ?? 1,
//            'redirect_uri' => $request->redirect_uri ?? 'http://localhost:5173/callback',
//            'response_type' => $request->code ?? 'code',
//        ]);

        // Combine the base URL with query parameters
        $redirectUrl .= '?' . $queryParams;

        return $redirectUrl;
    }


}

