<?php

namespace App\Exports;

use App\barang;
use App\BarangView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class barangExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BarangView::all();
    }
    public function headings(): array
    {
        return ["id", "Nama Barang","Kode Merek","Kode Distributor","Tanggal Masuk", "Harga Beli","harga Jual","Stok Barang", "keterangan", "created_at","update_at"];
    }
}
