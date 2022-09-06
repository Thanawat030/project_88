<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
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
        $customer = customer::all();
        return view('adminpage/customer/admincustomer' , compact('customer'));
    }
    public function formadd()
    {
        return view('adminpage.customer.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'name'=>'nullable',
            'lastname'=>'nullable',
        ]);

        Customer::create($request->all());
            

        return redirect()->route('adminpage.customer.admincustomer');
    }
    public function edit()
    {
        return view('/adminpage/customer/edit');
    }
}
