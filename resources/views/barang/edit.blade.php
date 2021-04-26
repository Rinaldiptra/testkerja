@extends('layout')

@section('contant')

<form action="{{ route('barang.update',$databarang->id) }}" method="POST">
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
    <label for="nama_barang">Nama Barang</label>
    <input type="text" name="nama_barang" value="{{ $databarang->nama_barang}}" class="form-control" placeholder="distributor">
  </div>
            <div class="form-group">
                <strong>Kode Merek:</strong>
                <select class="form-control" name="kd_merek" value='Kode Merek' >
                <option selected disable value="">pilih barang</option>
                    @foreach($merek as $id => $barang)
                       <option
                        @if ( $databarang->id = $barang )
                        selected
                        @endif
                        value="{{ $barang->id }}">{{ $barang->merek }}</option>
                    @endforeach 
                </select>
            </div>
        
            <div class="form-group">
                <strong>Kode Distributor:</strong>
                <select class="form-control" name="kd_distributor" value='Kode Distributor' >
                
                    @foreach($distributor as $id => $barang)
                        <option
                        @if ( $databarang->id = $barang )
                        selected
                        @endif
                         value="{{ $barang->id }}">{{ $barang->nama_distributor }}</option>
                    @endforeach 
                </select>
            </div>
        
  <div class="form-group">
    <label for="harga_barang">Harga Beli</label>
    <input type="text" name="harga_beli" value="{{ $databarang->harga_beli}}" class="form-control" placeholder="Harga Beli">
  </div>
  <div class="form-group">
    <label for="harga_barang">Harga Jual</label>
    <input type="text" name="harga_jual" value="{{ $databarang->harga_jual}}" class="form-control" placeholder="Harga Jual">
  </div>
  <div class="form-group">
    <label for="stok_barang">Stok Barang</label>
    <input type="text" name="stok_barang" value="{{ $databarang->stok_barang}}" class="form-control" placeholder="Stok Barang">
  </div>
  <div class="form-group">
    <label for="keterangan">Keteranga</label>
    <input type="text" name="keterangan" value="{{ $databarang->keterangan}}" class="form-control" placeholder="Keterangan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/barang" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>