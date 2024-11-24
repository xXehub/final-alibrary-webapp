<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserItem;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('auth.register', [
            config(['app.title' => "Register"]),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        // Sesuaikan dengan kolom yang ada di database
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'Access' => 1,
            'Gender' => $request->gender,
            'Age' => 22,
            'DateCreated' => now(),
            'LastLogin' => now(),
            'Settings' => 0,
            'RegisterAddress' => $request->ip(), // atau bisa diset default '0.0.0.0'
            'SocketAddress' => '0.0.0.0',
            'WebAddress' => '0.0.0.0',
        ]);

        // UserItem::insert([
        //     [
        //         'UserID' => $user->id,
        //         'ItemID' => 1,
        //         'EnhID' => 1,
        //         'Equipped' => 1,
        //         'Quantity' => 1,
        //         'Bank' => 0,
        //         'DatePurchased' => now()
        //     ],
        //     [
        //         'UserID' => $user->id,
        //         'ItemID' => 2,
        //         'EnhID' => 1,
        //         'Equipped' => 1,
        //         'Quantity' => 1,
        //         'Bank' => 0,
        //         'DatePurchased' => now()
        //     ],
        // ]);

        event(new Registered($user));

        Auth::login($user, true);

        return response()->json([
            'redirect' => route('home'),
        ]);
    }
}