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


        if($request->file('img')){

            $file= $request->file('img');
            $filename= date('YmdHi'). '_' .$file->getClientOriginalName();
            $file-> move(public_path('blackground'), $filename);
        }else{
            $filename=NULL;

        }
        
        blackground::create([
            
            'img'=>$filename,

        ]);
            

        return redirect()->route('adminpage.blackground.adminblackground');
    }
    public function edit()
    {
        return view('/adminpage/blackground/edit');
    }
    public function delete($id){
        $delete = Blackground::find($id);
        $delete->delete();
        return redirect()->route('adminpage.blackground.adminblackground');

    }
}
