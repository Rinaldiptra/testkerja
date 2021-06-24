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
                                    <li class="breadcrumb-item active">Company</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Company</h4>
                        </div>
                    </div>
                </div>
    <ul class="list-inline float-right mb-0">
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new Company</button>
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
          <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
              <label for="distributor">Name</label>
              <input name="nama" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Name" >
            </div>
            <div class="form-group">
              <label for="distributor">Email</label>
              <input name="email" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Addres" >
            </div>
            <div class="form-group">
              <label for="distributor">Logo</label>
              <input type="file" name="logo" class="form-control">
            </div>
            <div class="form-group">
              <label for="distributor">Website</label>
              <input name="websaite" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Number hp" >
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
                    
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Website</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>        
                <tbody>
                    @foreach ($data as $company) 
                  <tr>  
                  
                    <td>{{$company->nama}}</td>
                    <td>{{$company->email}}</td>
                   
                    <td> <img src="/public/logo/{{$company->logo}}" alt="..."></td>
                    <td>{{$company->websaite}}</td>
                    <td>
                    <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a>
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