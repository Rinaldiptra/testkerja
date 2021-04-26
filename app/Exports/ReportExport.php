<?php

namespace App\Exports;

use App\transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, withHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return transaksi::all();
    }
    public function headings(): array
    {
        return ["id", "kode_Detail", "Kode Barang","harga barang ","jumlah_barang", "Uang Bayar","tanggal_pembelian"];
    }
}
