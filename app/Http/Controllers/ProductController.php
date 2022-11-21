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
        $request->validate([
            // 'picture'=>'null'
                'name'=>'nullable',
                'type'=>'nullable',
                'details'=>'nullable',
                'price'=>'nullable',
        ]);
    
        if($request->file('img')){
    
            $file= $request->file('img');
            $filename= date('YmdHi'). '_' .$file->getClientOriginalName();
            $file-> move(public_path('product'), $filename);
        }else{
            $filename=NULL;
    
        }
        
        product::create([
            
            'img'=>$filename,
            'name'=>$request->name,
            'type'=>$request->type,
            'details'=>$request->details,
            'price'=>$request->price
    
        ]);
        return redirect()->route('adminpage.product.adminproduct');
    }
    public function edit()
    {
        return view('/adminpage/product/edit');
    }
}
