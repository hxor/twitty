<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome']]);
    }

    public function welcome()
    {
        if (Auth::user()) {
            return redirect()->route('home');
        }
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->username == null) {
            return view('auth.username');
        }
        return view('home');
    }

    public function postUsername(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users,username|regex:/^[ a-z0-9_.-]*$/'
        ]);

        $user = Auth::user();
        $user->update([
            'username' => $request->username
        ]);

        return view('auth.username');
    }
}
