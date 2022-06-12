<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Service;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }

    public function reviews()
    {
        $comments = Comment::where('user_id', '=', Auth::id())->get();
        return view('home.user.comments', [
            'comments' => $comments
        ]);
    }

    public function appointmentas()
    {
        $appointData = Appointment::where('user_id', '=', Auth::id())->get();
        return view('home.user.appointment', [
            'appointData' => $appointData
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reviewdestroy($id)
    {
        $data = Comment::find($id);
        $data->delete();
        return redirect('userpanel.reviews');

    }
}
