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
            'content'=>'nullable',
        ]);

        if($request->file('img')){

            $file= $request->file('img');
            $filename= date('YmdHi'). '_' .$file->getClientOriginalName();
            $file-> move(public_path('content'), $filename);
        }else{
            $filename=NULL;

        }
        
        Content::create([
            
            'img'=>$filename,
            'content'=>$request->content

        ]);
            

        return redirect()->route('adminpage.content.admincontent');
    }
    public function edit($id)
    {
        $Content = Content::find($id);
        return view('adminpage.content.edit',compact('Content'));
    }
    public function update(Request $request, $id){
        $update = content::find($id);
        $update->img = $request->img;
        $update->update();
        return redirect()->route('adminpage.content.admincontent');
    }
    public function delete($id){
        $delete = content::find($id);
        $delete->delete();
        return redirect()->route('adminpage.content.admincontent');

    }
}
