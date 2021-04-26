<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\merek;
use App\distributor;
use App\BarangView;
use Carbon\Carbon;
use App\Exports\barangExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
class barangController extends Controller
{
    public function index()
    {
        $distributor = distributor::all();
        $merek = merek::all();
        $data = BarangView::all();
        return view ('barang/index',['databarang'=>$data],compact('merek','distributor'));
    }

    public function store(Request $request)
    {
            $merek = merek::all();
            $distributor = distributor::all();
            $distributor = distributor::all();
            $barang_harga = barang::where('id', $request->id);
            $barang = new Barang;
            $barang->nama_barang = $request->nama_barang;
            $barang->kd_merek = $request->kd_merek;
            $barang->kd_distributor = $request->kd_distributor;
            $barang->tanggal_masuk = Carbon::now()->timezone('Asia/Jakarta');
            $barang->harga_beli = $request->harga_beli;
            $barang->harga_jual = $request->harga_jual;
            $barang->stok_barang = $request->stok_barang;
            $barang->keterangan = $request->keterangan;
            $barang->save();
    
            return redirect('/barang')->with('sukses','Data Berhasil Di input');
    }
        public function destroy(barang $barang)
        {
            $barang->delete();
            return redirect()->route('barang.index');
        }
        public function edit($id)
        {
            $distributor = distributor::all();
            $merek = merek::all();
            $barang = barang::all();
            $data = barang::where('id', $id)->first();
            return view('barang/edit', ['databarang'=>$data], compact('merek', 'distributor'));
           
        }
        public function update(request $request, $id)
        {
            $distributor = distributor::all();
            $merek = merek::all();
            $data = barang::where('id', $id);
            $nama_barang = $request->nama_barang;
            $kd_merek = $request->kd_merek;
            $kd_distributor = $request->kd_distributor;
            $tanggal_masuk = Carbon::now()->timezone('Asia/Jakarta');
            $harga_beli = $request->harga_beli;
            $harga_jual = $request->harga_jual;
            $stok_barang = $request->stok_barang;
            $keterangan = $request->keterangan;

            $data->update([
             'nama_barang'=>$nama_barang,
             'kd_merek'=>$kd_merek,
             'kd_distributor'=>$kd_distributor,
             'tanggal_masuk'=>$tanggal_masuk,
             'harga_beli'=>$harga_beli,
             'harga_jual'=>$harga_jual,
             'stok_barang'=>$stok_barang,
             'keterangan'=>$keterangan,

            ]);
            return redirect('/barang');
        }
        public function export_excel()
	{
		return Excel::download(new BarangExport, 'barang.xlsx');
	}
}
