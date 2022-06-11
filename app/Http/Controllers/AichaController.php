<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
use Illuminate\Support\Facades\DB;


class AichaController extends Controller
{
    //my functiontion executions are here!.
    public function index()
    {
        $sliderData = Service::limit(3)->get();
        $packagesData = Service::limit(3)->get();
        return view("home.index", [
            'sliderData' => $sliderData,
            'packagesData' => $packagesData
        ]);
    }
    public function services()
    {
        $sliderData = Service::limit(3)->get();
        $packagesData = Service::limit(3)->get();
        return view("home.servicePage", [
            'sliderData' => $sliderData,
            'packagesData' => $packagesData
        ]);
    }

    //    this is just for a service

    public function package($id)
    {

        $data = Service::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        return view('home.packages', [
            'data' => $data,
            'images' => $images

        ]);

    }

    //contact
    public function contact()
    {

        $setting = Setting::first();
        return view("home.contact", [
            'setting' => $setting
        ]);
    }

    public function about()
    {
//        echo 'about';
//        exit();

        $sliderData = Service::limit(4)->get();
        $setting = Setting::first();
        return view("home.about", [
            'setting' => $setting,
            'sliderData' => $sliderData

        ]);
    }

    //references
    public function references()
    {
//        echo "references";
//        exit();
        $setting = Setting::first();
        return view("home.reference", [
            'setting' => $setting
        ]);
    }

    //storemessage
    public function storemessage(Request $request)
    {

//        dd($request);// to check wether all the input feilds are filled
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Well received, Thank you for visiting');

    }

    // this is for any review left from users
    //storecomment
    public function storecomment(Request $request)
    {

//        dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->rate = $request->input('rate');
        $data->review = $request->input('review');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('package', ['id' => $request->input('product_id')])->with('info', 'your message has been sent, Thank you');

    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
    // admin login authentication
    public function adminlogincheck(Request $request)
    {
//        dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


}
