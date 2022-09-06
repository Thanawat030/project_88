<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
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
        $promotion = promotion::all();
        return view('/adminpage/promotion/adminpromotion',compact('promotion'));
    }
    public function formadd()
    {
        return view('/adminpage/promotion/add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'img'=>'nullable',
            'main_text'=>'nullable',
            'details'=>'nullable',
        ]);

        Promotion::create($request->all());
            

        return redirect()->route('adminpage.promotion.adminpromotion');
    }
    public function edit()
    {
        return view('/adminpage/promotion/edit');
    }
}
