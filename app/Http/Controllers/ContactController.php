<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('/adminpage/contact/admincontact');
    }
    public function add()
    {
        return view('/adminpage/contact/add');
    }
    public function edit()
    {
        return view('/adminpage/contact/edit');
    }
}
