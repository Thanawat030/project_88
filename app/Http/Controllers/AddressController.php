<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
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
        return view('/adminpage/address/adminaddress');
    }
    public function add()
    {
        return view('/adminpage/address/add');
    }
    public function edit()
    {
        return view('/adminpage/address/edit');
    }
}
