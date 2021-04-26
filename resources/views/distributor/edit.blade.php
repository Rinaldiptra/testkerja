@extends('layout')

@section('contant')

<form action="{{ route('distributor.update',$datadistributor->id) }}" method="POST">
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
    <label for="nama_distributor">distributor</label>
    <input type="text" name="nama_distributor" value="{{ $datadistributor->nama_distributor}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="{{ $datadistributor->alamat}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="no_hp">Nomor Hp</label>
    <input type="text" name="no_hp" value="{{ $datadistributor->no_hp}}" class="form-control" placeholder="distributor">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/distributor" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>