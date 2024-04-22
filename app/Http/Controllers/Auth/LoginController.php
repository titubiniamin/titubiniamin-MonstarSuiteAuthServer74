<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm(Request $request)
    {
//     return   $client_id = $request->session()->get('client_id');
        // Pass the client_id and redirect_uri to the login view
        $client_id = $request->input('client_id')??null;
        $redirect_uri = $request->input('redirect_uri')??null;
        $response_type = $request->input('response_type')??null;

        return view('auth.login', compact('client_id','redirect_uri','response_type'));
    }
    protected function authenticated(Request $request, $user)
    {

        $queries = http_build_query([
            'client_id' => $request->client_id ?? 3,
            'redirect_uri' => $request->redirect_uri ?? 'http://10.3.2.51:8002/oauth/callback',
            'response_type' => $request->code ?? 'code',
        ]);
//        $queries = http_build_query([
//            'client_id' => $request->client_id ?? 1,
//            'redirect_uri' => $request->redirect_uri ?? 'http://localhost:5173/callback',
//            'response_type' => $request->code ?? 'code',
//        ]);

        return redirect('http://10.3.2.51:8003/oauth/authorize?' . $queries);
    }
}
