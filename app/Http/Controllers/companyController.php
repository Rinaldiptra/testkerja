<?php

namespace App\Http\Controllers;
use App\company;


use Illuminate\Http\Request;

class companyController extends Controller
{
    public function index()
    {
        
    $data = company::all();
   
    return view ('company.index', compact('data',));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'websaite'=>'required',

        ]);
        $logo = time().'.'.$request->logo->extension(); 
        $request->logo->move(public_path('logo'), $logo);
        company::create($request->all());
        return redirect()->route('company.index')
                    ->with('success'. 'Company created succsessfully');
    }
    public function destroy(company $company)
    {
        $company->delete();
        return redirect()->route('company.index')
        ->with('success','Company deleted successfully');
    }
    public function edit($id)
    {
        $company = company::all();
        $data = company::where('id',$id)->first();
        return view('company.edit', compact('data'));
    }


     public function update(Request $request,$id)
    {
        $data= company::where('id',$id);
      
        
        $nama=$request->nama;
        $email=$request->email;
        $logo=$request->logo;
        $websaite=$request->websaite;
        $data->update([
            
          
            'nama' => $nama,
            'email' => $email,
            'logo' => $logo,
            'websaite' => $websaite,
            
           
        ]);
        return redirect('/company');
    }
}
