<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('/adminpage/product/adminproduct');
    }
    public function add()
    {
        return view('/adminpage/product/add');
    }
    public function edit()
    {
        return view('/adminpage/product/edit');
    }
}
