<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $product = product::all();
        return view('/adminpage/product/adminproduct',compact('product'));
    }
    public function formadd()
    {
        return view('adminpage.product.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'img'=>'nullable',
            'name'=>'nullable',
            'type'=>'nullable',
            'details'=>'nullable',
            'price'=>'nullable',
        ]);

        Product::create($request->all());
            

        return redirect()->route('adminpage.product.adminproduct');
    }
    public function edit()
    {
        return view('/adminpage/product/edit');
    }
}
