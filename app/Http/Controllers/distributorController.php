<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\distributor;
class distributorController extends Controller
{
    public function index()
    {
        $data = distributor::all();

        return view('distributor.index', ['datadistributor'=>$data]);
    }
    public function store(Request $request)
    {
        $request-> validate([
            'distributor'=>'requared'
        ]);

        distributor::create($request->all());
        return redirect()->route('distributor.index')
        ->with('success'. 'Merek created succsessfully');
    }
    public function destroy(distributor $distributor)
    {
        $distributor->Delete();
        return redirect()->route('distributor.index')
        ->with('success','merek deleted successfully');
    }
    public function edit($id)
    {
        $distributor = distributor::all();
        $data = distributor::where('id', $id)->first();
        return view('distributor/edit',['datadistributor'=>$data],['datadistributor'=>$data]);
    }
    public function update(request $request, $id)
    {
        $data = distributor::where('id', $id);
        $nama_distributor=$request->nama_distributor;
        $alamat=$request->alamat;
        $no_hp=$request->no_hp;

        $data->update([
            
            'nama_distributor' => $nama_distributor,
            'alamat' => $alamat,
            'no_hp' => $no_hp,

        ]);
        return redirect('/distributor');
    }
}
