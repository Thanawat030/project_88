<?php

namespace App\Http\Controllers;

use App\models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        //R Read
        $contact = contact::all();
        return view('adminpage.contact.admincontact',compact('contact'));
    }
    public function formadd()
    {
        //C1->from
        return view('adminpage.contact.add');
    }
    public function add(Request $request)
    {
        //C2->create
        $request->validate([
            // 'picture'=>'null'
            'phonenumber'=>'nullable',
            'line'=>'nullable',
            'facebook'=>'nullable',
        ]);

        Contact::create($request->all());
            

        return redirect()->route('adminpage.contact.admincontact');
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('adminpage.contact.edit',compact('contact'));
    }

    public function update(Request $request, $id){
        $update = Contact::find($id);
        $update->phonenumber = $request->phonenumber;
        $update->line = $request->line;
        $update->facebook = $request->facebook;
        $update->update();
        return redirect()->route('adminpage.contact.admincontact');
    }

    public function delete($id){
        $delete = Contact::find($id);
        $delete->delete();
        return redirect()->route('adminpage.contact.admincontact');

    }
}
