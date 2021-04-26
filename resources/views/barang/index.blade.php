@extends('template')

@section('content')

            <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Component</a></li>
                                    <li class="breadcrumb-item active">Item</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Item</h4>
                        </div>
                    </div>
                </div>

     <div class="pull-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new item </button>
     </div>
     <br>
     <br>
    
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Create</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
    <div class="modal-body">  
        <form action="{{ route('barang.store') }}" method="POST">

                @csrf
            <div class="row">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Barang:</strong>
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Merek:</strong>
                        <select class="form-control select2" name="kd_merek">
                          <option selected disable value="">Pilih merek</option>
                          @foreach ($merek as $i)
                              <option value="{{ $i->id }}">{{ $i->merek }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Distributor:</strong>
                        <select class="form-control select2" name="kd_distributor">
                          <option selected disable value="">Pilih distributor</option>
                          @foreach ($distributor as $i)
                              <option value="{{ $i->id }}">{{ $i->nama_distributor }}</option>
                          @endforeach
                        </select>
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
                            <input type="text" name="stok_barang" class="form-control" placeholder="Masukkan Nomor">
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Keterangan</strong>
                            <input type="text" name="keterangan" class="form-control" placeholder="Masukkan Nomor">
                        </div>
                </div>
                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Submit</button>
            </div>
        </form>
        </div>
    </div>
 </div>
</div>
<div class="card-body">
<table id="datatable" class="table table-bordered">
                <thead >
                  <tr>
                    
                    
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col"> Merek</th>
                    <th scope="col"> Distributor</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Stok Barang</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                  
                  <tbody>
                    @foreach ($databarang as $barang) 
                  <tr>
                    
                  
                  <td>{{$barang->id}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->merek}}</td>
                    <td>{{$barang->nama_distributor}}</td>
                    <td>{{$barang->tanggal_masuk}}</td>
                    <td>{{$barang->harga_beli}}</td>
                    <td>{{$barang->harga_jual}}</td>
                    <td>{{$barang->stok_barang}}</td>
                    <td>{{$barang->keterangan}}</td>
                    <td>
                    <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('barang.edit',$barang->id) }}">Edit</a>

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
            </div>


@endsection