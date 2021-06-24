@extends('layout')

@section('contant')

<form action="{{ route('company.update',$data->id) }}" method="POST">
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
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="{{ $data->nama}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="email">Emailt</label>
    <input type="text" name="email" value="{{ $data->email}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="logo">Logo</label>
    <input type="text" name="logo" value="{{ $data->logo}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="websaite">Websaite</label>
    <input type="text" name="websaite" value="{{ $data->websaite}}" class="form-control" placeholder="distributor">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/distributor" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>