<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function home()
    {
        return view('front.home');
    }

    public function login(Request $request)
    {
        // return $request;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
        
           
            if(count(auth()->user()->getRoleNames()) > 0) {
                session()->put('locale', 'ar');
                app()->setLocale(session()->get('locale'));
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->route('home');
            }
        }else {
            return redirect()->route('login')->withInput()->withErrors(['msg' => 'Invalid email or password']);;
        }
    }

   }
