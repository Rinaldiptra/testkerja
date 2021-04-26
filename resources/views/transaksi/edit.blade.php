@extends('layout')

@section('contant')

<form action="{{ route('transaksi.update',$datatransaksi->id) }}" method="POST">
  @csrf
  @method('PUT')
  
<div class="container">
<div class="mt-5">
  <div class="pull-left">
     <h2>Edit</h2>
  </div>
  <div class="card">
  <div class="card-body">
  <div class="form-group">
    
 
 <div class="form-group">
    <label>KD Transaksi </label>
   <input type="text" name="kd_transaksi" value="{{ $datatransaksi->kd_barang}}" class="form-control" placeholder="Name">
  </div>

  
                                <div class="form-group">
                                    <strong>Kode Barang:</strong>
                                    <select class="form-control" name="kd_barang" value='Kode barang' >
                                        {{-- <option>Kode barang</option> --}}
                                        @foreach($barang as $kd_barang => $trans)
                                            <option value="{{ $trans->kd_barang }}">{{ $trans->nama_barang }}</option>
                                        @endforeach 
                                    </select>
                                    {{-- <input type="text" name="kd_barang" class="form-control" placeholder="Kode Merek"> --}}
                                </div>
                           
  <div class="form-group">
    <label for="kd_user">KD User</label>
    <input type="text" name="kd_user" value="{{ $datatransaksi->kd_user}}" class="form-control" placeholder="distributor" readonly>
  </div>
  <div class="form-group">
    <label for="jumlah_beli">Jumlah Beli</label>
    <input type="text" name="jumlah_beli" value="{{ $datatransaksi->jumlah_beli}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="total_harga">Total Harga</label>
    <input type="text" name="total_harga" value="{{ $datatransaksi->total_harga}}" class="form-control" placeholder="distributor">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/transaksi" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>
