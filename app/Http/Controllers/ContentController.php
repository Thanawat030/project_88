<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
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
        $content = content::all();
        return view('/adminpage/content/admincontent',compact('content'));
    }
    public function formadd()
    {
        return view('adminpage.content.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'img'=>'nullable',
            'content'=>'nullable',
        ]);

        Content::create($request->all());
            

        return redirect()->route('adminpage.content.admincontent');
    }
    public function edit()
    {
        return view('/adminpage/content/edit');
    }
}
