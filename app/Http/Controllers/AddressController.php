<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
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
        $address = address::all();
        return view('adminpage.address.adminaddress',compact('address'));
    }
    public function formadd()
    {
        return view('.adminpage.address.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'id'=>'nullable',
            'address'=>'nullable',
        ]);

        Address::create($request->all());
            

        return redirect()->route('adminpage.address.adminaddress');
    }
    public function edit($id)
    {
        $Address = Address::find($id);
        return view('adminpage.address.edit',compact('Address'));
    }

    public function update(Request $request, $id){
        $update = Address::find($id);
        $update->address = $request->address;
        $update->update();
        return redirect()->route('adminpage.address.adminaddress');
    }
    public function delete($id){
        $delete = Address::find($id);
        $delete->delete();
        return redirect()->route('adminpage.address.adminaddress');
    
    
    }
}
