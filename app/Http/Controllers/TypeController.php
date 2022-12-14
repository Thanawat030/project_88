<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Type;

class TypeController extends Controller
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
        $type_product = type::all();
        return view('/adminpage/type/admintype',compact('type_product'));
    }
    public function formadd()
    {
        return view('/adminpage/type/add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'name'=>'nullable',
        ]);

        Type::create($request->all());
            

        return redirect()->route('adminpage.type.admintype');
    }
    public function edit($id)
    {
        $type_product = Type::find($id);
        return view('adminpage.type.edit',compact('type_product'));
    }
    public function update(Request $request, $id){
        $update = Type::find($id);
        $update->name = $request->name;
        $update->update();
        return redirect()->route('adminpage.type.admintype');
    }
    public function delete($id){
        $delete = Type::find($id);
        $delete->delete();
        return redirect()->route('adminpage.type.admintype');

    }
}
