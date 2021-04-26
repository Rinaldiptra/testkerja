
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
                                    <li class="breadcrumb-item active">Brands</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Brands</h4>
                        </div>
                    </div>
                </div>
   

      <div class="pull-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new Brands</button>
        </div>
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
          <form action="{{ route('merek.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="merek">Brand</label>
              <input name="merek" type="text" class="form-control" id="merek" aria-describedby="merek" placeholder="merek" >
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Submit</button>
            <!-- <button type="submit" class="btn btn-primary" >Submit</button> -->
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
                    
                    <th scope="col">ID Brand</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>        
                <tbody>
                    @foreach ($datamerek as $merek) 
                  <tr>  
                  
                    <td>{{$merek->id}}</td>
                    <td>{{$merek->merek}}</td>
                    <td>
                    <form action="{{ route('merek.destroy',$merek->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('merek.edit',$merek->id) }}">Edit</a>
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