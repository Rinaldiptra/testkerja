@extends('template')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Barang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="row">
        
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Merek:</strong>
                <select class="form-control" name="id_kelas" value='ID Kelas' >
                <option selected disable value="">pilih Kelas</option>
                    @foreach($rombel as $id => $barang)
                        <option value="{{ $barang->id }}">{{ $barang->merek }}</option>
                    @endforeach 
                </select>
                {{-- <input type="text" name="kd_merek" class="form-control" placeholder="Kode Merek"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Distributor:</strong>
                <select class="form-control" name="kd_distributor" value='Kode Distributor' >
                <option selected disable value="">pilih distributor</option>
                    @foreach($distributor as $id => $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama_distributor }}</option>
                    @endforeach 
                </select>
                {{-- <input type="text" name="kd_distributor" class="form-control" placeholder="Kode Distributor"> --}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Beli:</strong>
                <input type="text" name="harga_beli" class="form-control" placeholder="Harga Beli">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Jual:</strong>
                <input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Barang:</strong>
                <input type="text" name="stok_barang" class="form-control" placeholder="Stok Barang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection