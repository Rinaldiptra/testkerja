<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employ;
use App\company;
use App\view_employ;

class employController extends Controller
{
    public function index()
    {
    $company = company::all();
    $data = view_employ::all();
   
    return view ('employ.index', compact('data','company'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'company'=>'required',
            'email'=>'required',
            'phone'=>'required',

        ]);
        employ::create($request->all());
        return redirect()->route('employ.index')
                    ->with('success'. 'employ created succsessfully');
    }
    public function destroy(employ $employ)
    {
        $employ->delete();
        return redirect()->route('employ.index')
        ->with('success','Employ deleted successfully');
    }
    public function edit($id)
    {
        $employ = employ::all();
        $data = employ::where('id',$id)->first();
        return view('employ.edit', compact('data'));
    }


     public function update(Request $request,$id)
    {
        $data= employ::where('id',$id);
      
        
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $company=$request->company;
        $email=$request->email;
        $phone=$request->phone;
        $data->update([
            
          
            'first_name' => $first_name,
            'last_name' => $last_name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            
           
        ]);
        return redirect('/employ');
    }
}
