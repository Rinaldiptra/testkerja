@extends('layout')

@section('contant')

<form action="{{ route('merek.update',$datamerek->id) }}" method="POST">
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
    <label for="Merek">merek</label>
    <input type="text" name="merek" value="{{ $datamerek->merek}}" class="form-control" placeholder="merek">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/merek" class="btn btn-primary">Back</a>
</div>
</div>
</div>
</form>