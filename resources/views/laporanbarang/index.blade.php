@extends('template')

@section('content')
 <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Report</a></li>
                                    <li class="breadcrumb-item active">Report Item</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Report Item</h4>
                        </div>
                    </div>
                </div>
                <div class= "pull-right">
                  <a href="/report/export_excel" class="btn btn-primary mb-3" target="_blank">Download Report</a>
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
                    
                  </tr>
                  @endforeach    
              </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection