<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Appointment;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Appointment::All();
//             dd($data);
        return view('homeAdminP.order.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = Appointment::find($id);
        $datalist = Appointment::where('user_id', $id)->get();
        //dd($data);
        return view('homeAdminP.order.show', [
            'data' => $data,
            'datalist' => $datalist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $data = Appointment::find($id);
        $data->status = $request->status;
        $data->note = $request->note;
        $data->save();
        return redirect()->back();
    }

    public function cancelorder($id)
    {
        $data = Appointment::find($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();
    }

    public function cancelproduct($id)
    {
        $data = Appointment::find($id);
        $data->status = 'cancelled';
        $data->save();
        return redirect()->back();
    }


    public function acceptproduct($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Accepted';
        $data->save();
        return redirect()->back();
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
}
