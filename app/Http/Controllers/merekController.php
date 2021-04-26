<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merek;
use Alert;

class merekController extends Controller
{
    public function index()
    {
    $data = merek::all();
   
    return view ('merek/index',['datamerek'=>$data]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek'=>'required',
        ]);
        merek::create($request->all());
        return redirect()->route('merek.index')
                    ->with('success'. 'Merek created succsessfully');
    }
    public function destroy(merek $merek)
    {
        $merek->delete();
        return redirect()->route('merek.index')
        ->with('success','merek deleted successfully');
    }
    public function edit($id)
    {
        $merek = merek::all();
        $data = merek::where('id',$id)->first();
        return view('merek/edit',['datamerek'=>$data]);
    }


     public function update(Request $request,$id)
    {
        $data= merek::where('id',$id);
      
        
        $merek=$request->merek;
       
        
        $data->update([
            
          
            'merek' => $merek,
            
           
        ]);
        return redirect('/merek');
    }
}
