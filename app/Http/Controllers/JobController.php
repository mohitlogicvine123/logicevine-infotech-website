<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
// this function is use to store data in job form for get the web site


    public function index(){
        $jobs= job::all();
        return view('admin.job.index',compact('jobs'));
    }


    public function submitApplication(Request $request){
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'coverletter' => 'nullable|string',
        'file_upload' => 'required',
    ]);

  $img = null;
        if ($request->hasFile('file_upload') && $request->file('file_upload')->isValid()) {
          $img = $request->file('file_upload')->store('galleries', 'public');
        }

    $insert = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'coverletter' => $request->coverletter,
        'file_upload' => $img,
    ];

    Job::create($insert);
        return redirect()->route('web.carrier')->with('success', 'Application submitted successfully!');

    }


    public function destroy( string $id){
          Job::where('id', $id)->delete();
        return redirect()->route('admin.job.index');
    }
}
