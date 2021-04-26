@extends('template')

@section('content')
<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Report</a></li>
                                    <li class="breadcrumb-item active">Report Transaction</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Report Transaction</h4>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                <a href="/report/export_excel_trans" class="btn btn-primary mb-3" target="_blank">Download Report</a>
                </div>
<br>
<br>
<div class="card-body">
<table id="datatable" class="table table-bordered">
                <thead >
                  <tr>
                    
                    
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Kode User</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Uang Bayar</th>
                    <th scope="col">Kembalian</th>
                    <th scope="col">Tanggal Beli</th>
                   
                   
                  </tr>
                </thead>
                  
                  <tbody>
                    @foreach ($datatransaksi as $trans) 
                  <tr>
                    
                  
                    <td>{{$trans->id}}</td>
                    <td>{{$trans->kd_user}}</td>
                    <td>{{$trans->total_harga_keseluruhan}}</td>
                    <td>{{$trans->bayar}}</td>
                    <td>{{$trans->kembalian}}</td>
                    <td>{{$trans->tanggal_beli}}</td>
                  </tr>
                  @endforeach    
              </tbody>
              </table>
              </div>
            </div>
            </div>


@endsection