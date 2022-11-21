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
            'main_text'=>'nullable',
            'details'=>'nullable',
        ]);

        if($request->file('img')){

            $file= $request->file('img');
            $filename= date('YmdHi'). '_' .$file->getClientOriginalName();
            $file-> move(public_path('promotion'), $filename);
        }else{
            $filename=NULL;

        }
        
        Promotion::create([
            
            'img'=>$filename,
            'content'=>$request->content,
            'main_text'=>$request->main_text,
            'details'=>$request->details

        ]);
            

        return redirect()->route('adminpage.promotion.adminpromotion');
    
    }
    public function edit($id)
    {
        $Promotion = Promotion::find($id);
        return view('adminpage.promotion.edit',compact('Promotion'));
    }
    public function update(Request $request, $id){
        $update = Promotion::find($id);
        $update->img = $request->img;
        $update->main_text = $request->main_text;
        $update->details = $request->details;
        $update->update();
        return redirect()->route('adminpage.promotion.adminpromotion');
    }
    public function delete($id){
        $delete = Promotion::find($id);
        $delete->delete();
        return redirect()->route('adminpage.promotion.adminpromotion');

    }
}
