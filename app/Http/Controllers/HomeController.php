<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata = Hotel::limit(4)->get();
        $hotellist1 = Hotel::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'hotellist1'=>$hotellist1
        ]);
    }


    public function aboutus()
    {
        return view(view: 'home.about');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');

            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
         else {
            return view('admin.login');
        }


    }
}
