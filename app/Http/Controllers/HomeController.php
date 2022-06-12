<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Hotel;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public static function maincategorylist()
    {

        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index()
    {
        $sliderdata = Hotel::limit(4)->get();
        $hotellist1 = Hotel::limit(6)->get();
        $setting = Setting::first();
        return view('home.index',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'hotellist1'=>$hotellist1
        ]);
    }
    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }
    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist

        ]);
    }
    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your Message has been sent , Thank You.');

    }
    public function storecomment(Request $request)
    {
       //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->hotel_id = $request->input('hotel_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();
        return redirect()->route('hotel',['id'=>$request->input('hotel_id')])->with('info', 'Your comment has been sent , Thank You.');

    }
    public function hotel($id)
    {
        $data = Hotel::find($id);
        $images = DB::table('images')->where('hotel_id',$id)->get();
        $reviews = Comment ::where('hotel_id',$id)->where('status','True')->get();
        return view('home.hotel',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews

        ]);
    }

    public function categoryhotels($id)
    {
        $category = Category::find($id);
        //$hotels = DB::table('hotels')->where('category_id',$id)->get(); bakılacak
        $hotels =Hotel::limit(6)->get();
        return view('home.categoryhotels',[
            'category'=>$category,
            'hotels'=>$hotels

        ]);
    }


    public function login()
    {
        return view('admin.login');
    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');

        }
        return back()->withErrors([
            'error' => 'The provided credentials do not  match  our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function loginadmin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
