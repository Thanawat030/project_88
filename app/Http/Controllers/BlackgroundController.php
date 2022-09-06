<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blackground;

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
        $blackground = blackground::all();
        return view('/adminpage/blackground/adminblackground',compact('blackground'));  
    }
    public function formadd()
    {
        return view('adminpage.blackground.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'img'=>'nullable',
        ]);

        Blackground::create($request->all());
            

        return redirect()->route('adminpage.blackground.adminblackground');
    }
    public function edit()
    {
        return view('/adminpage/blackground/edit');
    }
}
