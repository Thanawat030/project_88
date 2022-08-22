<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


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
        $customer = User::all();
        return view('adminpage/customer/admincustomer' , compact('customer'));
    }
}