<?php

namespace App\Http\Controllers;
use App\transaksi;
use App\TransaksiView;
use App\DetailTransaksi;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class laporantransController extends Controller
{
    public function index()
    {
        $a = DetailTransaksi::where('status', 'bayar')->pluck('id');
        
        $trans = DetailTransaksi::whereIn('id', $a)->get();

        return view('laporan.index',['datatransaksi'=>$trans]);
    }
    public function export_excel()
	{
		return Excel::download(new ReportExport, 'Report.xlsx');
	}
}
