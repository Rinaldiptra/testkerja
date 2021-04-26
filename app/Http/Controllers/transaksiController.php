<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\DetailTransaksi;
use App\barang;
use App\TransaksiView;
use Carbon\Carbon;
use Auth;

class transaksiController extends Controller
{
    public function index()
    {
        $a = DetailTransaksi::where('status', 'belum')->first();
        if ($a == null) {
            DetailTransaksi::create([
                'kd_user' => Auth::User()->id,
                'status' => 'belum',
                'total_harga_keseluruhan' => 0,
                'bayar' => 0,
                'kembalian' => 0,
                'tanggal_beli' => Carbon::now()
            ]);

            $a = DetailTransaksi::where('status', 'belum')->first();
        }

        $barangbayar = TransaksiView::where('kd_detail', $a->id)->get();
        $barangtotal = TransaksiView::where('kd_detail', $a->id)->sum('total_harga');
        $data = TransaksiView::all();
        $barang = barang::all();
        return view('transaksi.index', ['datatransaksi'=>$data], compact('barang', 'a', 'barangbayar', 'barangtotal'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
            $barang_harga = barang::where('id', $request->nama_barang)->first();
            $barangData = barang::where('id', $request->nama_barang)->first();
            // dd($barangData);
            $data = $request->all();
            // dd($barang_harga);
          
            $transaksi = new Transaksi;
            $transaksi->kd_detail = $request->kd_detail;
            $transaksi->kd_barang = $request->nama_barang;
            $transaksi->harga_barang = $barang_harga->harga_jual;
            $transaksi->jumlah_barang = $request->jumlah_beli;
            $transaksi->total_harga = $barang_harga->harga_jual * $request->jumlah_beli;

            if ($request->jumlah_beli > $barangData->stok_barang ) {
                return redirect()->route('transaksi.index')
                ->with('error','Transaksi created Failed.');
                } elseif($request->jumlah_beli < 0 ){
                    return redirect()->route('transaksi.index')->with('error','Transaksi Gagal');
                    }else{
                    $transaksi->save();
                    $barangData->stok_barang = $barangData->stok_barang - $request->jumlah_beli;
                    $barangData->save();        
                }
                return redirect()->route('transaksi.index')
                        ->with('success','Transaksi created successfully.');
            // return redirect('/transaksi')->with('sukses','Data Berhasil Di input');
    }
   
 
    public function destroy($transaksi)
    {
        
        $a = transaksi::where('id', $transaksi)->delete();
        
        return redirect('/transaksi');
    }
    public function edit($id)
    {

        $barang = barang::all();
        $transaksi = transaksi::all();
        $data = transaksi::where('id',$id)->first();
        return view('transaksi/edit',['datatransaksi'=>$data], compact('barang'));
    }


     public function update(Request $request,$id)
    {
        $barang = barang::all();
        $data= transaksi::where('id',$id);
      
        
        $kd_barang=$request->kd_barang;
        $harga_barang=$request->harga_barang;
        $jumlah_barang=$request->jumlah_barang;
        $total_harga=$request->total_harga;
       
        
        $data->update([
            
            
            'kd_barang' => $kd_barang,
            'harga_barang'=>$harga_barang,
            'jumlah_barang' => $jumlah_barang,
            'total_harga' => $total_harga,
           
        ]);
        return redirect('/transaksi');
    }
    public function bayar(Request $request, $id)
    {
        $data = $request->all();
        $data['kembalian'] = $request->uang - $request->total;
        // dd($data['kembalian']);

        if ($request->uang < $request->total) {
            return redirect()->route('transaksi.index')->with('error','Transaksi created Failed.');
        } else {
            $a = DetailTransaksi::find($id)->update([
                'status' => 'bayar',
                'total_harga_keseluruhan' => $request->total,
                'bayar' => $request->uang,
                'kembalian' => $request->uang - $request->total,
                'tanggal_beli' => Carbon::now()
            ]);
        }
        return redirect('/transaksi');
    }
}
