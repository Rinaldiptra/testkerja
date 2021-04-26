<?php

namespace App\Http\Controllers;
use App\barang;
use App\BarangView;
use Illuminate\Http\Request;

class laporanbarController extends Controller
{
    public function index()
    {
        $bar = BarangView::all();
        return view('laporanbarang.index',['databarang'=>$bar]);
    }
}
