<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.enq.index', compact('contact'));
    }



    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'company_name' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'company_name' => $request->company_name,
            'message' => $request->message
        ]);

        return redirect()->route('web.index')->with('success', 'Form submitted successfully!');
    }

    public function destroy(string $id){
        Contact::where('id', $id)->delete();
        return redirect()->route('admin.enq.index');
    }
}
