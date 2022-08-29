<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlackgroundController extends Controller
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
        return view('/adminpage/blackground/adminblackground');
    }
    public function add()
    {
        return view('/adminpage/blackground/add');
    }
    public function edit()
    {
        return view('/adminpage/blackground/edit');
    }
}
