<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $delivery = delivery::all();
        return view('adminpage/delivery/admindelivery',compact('delivery'));
    }
    public function formadd()
    {
        return view('adminpage.delivery.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'day'=>'nullable',
            'line'=>'nullable',
            'address'=>'nullable',
            'quantity'=>'nullable',
            'details_delivery'=>'nullable',
            'price'=>'nullable',
        ]);

        Delivery::create($request->all());
            

        return redirect()->route('adminpage.delivery.admindelivery');
    }
    public function edit()
    {
        return view('adminpage/delivery/edit');
    }
}
