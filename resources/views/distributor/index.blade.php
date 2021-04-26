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
                                    <li class="breadcrumb-item active">Distributors</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Distributors</h4>
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
          <form action="{{ route('distributor.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="distributor">Name</label>
              <input name="nama_distributor" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Name" >
            </div>
            <div class="form-group">
              <label for="distributor">Addres</label>
              <input name="alamat" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Addres" >
            </div>
            <div class="form-group">
              <label for="distributor">No Hp</label>
              <input name="no_hp" type="text" class="form-control" id="distributor" aria-describedby="distributor" placeholder="Number hp" >
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
                    
                    <th scope="col">Nama Distributor</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Hp</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>        
                <tbody>
                    @foreach ($datadistributor as $distributor) 
                  <tr>  
                  
                    <td>{{$distributor->nama_distributor}}</td>
                    <td>{{$distributor->alamat}}</td>
                    <td>{{$distributor->no_hp}}</td>
                    <td>
                    <form action="{{ route('distributor.destroy',$distributor->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('distributor.edit',$distributor->id) }}">Edit</a>
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