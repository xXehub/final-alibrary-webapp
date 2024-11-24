<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('auth.login', [
            config(['app.title' => "Login"]),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        return response()->json([
            'redirect' => route('home'),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
