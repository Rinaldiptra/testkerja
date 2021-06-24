@extends('template')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    </div>

    <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Component</a></li>
                                    <li class="breadcrumb-item active">Employs</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Employs</h4>
                        </div>
                    </div>
                </div>
    <ul class="list-inline float-right mb-0">
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new Distributor</button>
</ul>
        <!-- Modal -->
        <br>
        <br>
         <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="{{ route('employ.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="distributor">First Name</label>
              <input name="first_name" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="First Name" >
            </div>
            <div class="form-group">
              <label for="distributor">Last Name</label>
              <input name="last_name" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Last Name" >
            </div>
            <div class="form-group">
              <label for="company">company</label>
              <div class="form-group">
                <strong>Nama Company:</strong>
                <select class="form-control " name="company">
                  <option selected disable value="">Pilih company</option>
                  @foreach ($company as $i)
                      <option value="{{ $i->id }}">{{ $i->nama }}</option>
                  @endforeach
                </select>
            </div>
            </div>
            <div class="form-group">
              <label for="distributor">Email</label>
              <input name="email" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Email" >
            </div>
            <div class="form-group">
              <label for="distributor">Phone</label>
              <input name="phone" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Phone" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>

        <div class="card-body">
        <table id="datatable" class="table table-bordered">
                <thead >
                  <tr>            
                    
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>        
                <tbody>
                    @foreach ($data as $employ) 
                  <tr>  
                  
                    <td>{{$employ->first_name}}</td>
                    <td>{{$employ->last_name}}</td>
                    <td>{{$employ->nama}}</td>
                    <td>{{$employ->email}}</td>
                    <td>{{$employ->phone}}</td>
                    <td>
                    <form action="{{ route('employ.destroy',$employ->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('employ.edit',$employ->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Data akan di hapus');">Delete</button>
                    </form>
                  </td>  
                  </tr>
                  @endforeach
              </tbody>
        </table>
      </div>
  </div>
@endsection