@extends('layout')

@section('contant')

<form action="{{ route('employ.update',$data->id) }}" method="POST">
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
    <label for="nama">First Name</label>
    <input type="text" name="first_name" value="{{ $data->first_name}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="email">Last Name</label>
    <input type="text" name="last_name" value="{{ $data->last_name}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="logo">Company</label>
    <input type="text" name="company" value="{{ $data->company}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="websaite">Email</label>
    <input type="text" name="email" value="{{ $data->email}}" class="form-control" placeholder="distributor">
  </div>
  <div class="form-group">
    <label for="websaite">Phone</label>
    <input type="text" name="phone" value="{{ $data->phone}}" class="form-control" placeholder="distributor">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/employ" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>