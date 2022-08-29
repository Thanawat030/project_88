<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('adminpage/delivery/admindelivery');
    }
    public function add()
    {
        return view('adminpage/delivery/add');
    }
    public function edit()
    {
        return view('adminpage/delivery/edit');
    }
}
