<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
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

//        dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Well received, Thank you for visiting');

    }


}
