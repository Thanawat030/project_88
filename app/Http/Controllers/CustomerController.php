<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
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
        $customer = customer::all();
        return view('adminpage/customer/admincustomer' , compact('customer'));
    }
    public function formadd()
    {
        return view('adminpage.customer.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'name'=>'nullable',
            'lastname'=>'nullable',
        ]);

        Customer::create($request->all());
            

        return redirect()->route('adminpage.customer.admincustomer');
    }
    public function edit($id)
    {
        $Customer = Customer::find($id);
        return view('adminpage.customer.edit',compact('Customer'));
    }
    public function update(Request $request, $id){
        $update = Customer::find($id);
        $update->name = $request->name;
        $update->lastname = $request->lastname;
        $update->update();
        return redirect()->route('adminpage.customer.admincustomer');
    }
    public function delete($id){
        $delete = Customer::find($id);
        $delete->delete();
        return redirect()->route('adminpage.customer.admincustomer');

    }
}
