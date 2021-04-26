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
                                    <li class="breadcrumb-item"><a href="#">Transaction</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Basket</h4>
                        </div>
                    </div>
                </div>

<div class="pull-right">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new item </button>
</div>
                  <!-- Modal -->
                  
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
                                
                          <form action="{{ route('transaksi.store') }}" method="POST">

                                  @csrf

                              

                              <div class="row">

                                      
                                      </div>
        <div>
          <select name="nama_barang" class="form-control" class="form-control form-control-md" id="" onchange='changeValueNama(this.value)' required="required">
                                  <option value="" disabled="disabled" selected="selected">Nama Barang</option>
                                  <?php
                                      $con = mysqli_connect("localhost", "root","", "pos");
                                      $query=mysqli_query($con, "select * from barang order by nama_barang asc");
                                      $result = mysqli_query($con, "select * from barang");
                                      $jsArrayNama = "var nama_barangName = new Array();\n";
                                      while ($row = mysqli_fetch_array($result)) {
                                      echo '<option name="nama_barang"  value="' . $row['id'] . '">' . $row['nama_barang'] . '</option>';
                                      $jsArrayNama .= "nama_barangName['" . $row['id'] . "'] = {stok_barang:'" . addslashes($row['stok_barang']) . "'};\n";
                                      }
                                  ?>
            </select>
        </div>
                                                
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <strong>Stok</strong>
                                              <input type="text" class="form-control" id="stok_barang" readonly>
                                              <input type="hidden" name="kd_detail" value="{{$a->id}}">
                                          </div>
                                      </div> 
                                      <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <strong>Harga</strong>
                                              <input type="text" class="form-control" id="harga_jual" readonly>
                                              
                                          </div>
                                      </div>       -->
                                  
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <strong>Jumlah Beli:</strong>
                                              <input type="number" name="jumlah_beli" class="your_class" placeholder="Masukkan Nomor">
                                          </div>
                                  </div>
                                  
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                  </div>
                              </div>
                          </form>
                          </div>
                      </div>
                  </div>
              </div>
       
<div class="card-body">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
<table id="datatable" class="table table-bordered">
                <thead >
                  <tr>
                    
                    
                    
                    <th scope="col"> Barang</th>
                    <th scope="col"> Harga Barang</th>
                    <th scope="col">Jumlah beli</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                  
                  <tbody>
                    @foreach ($barangbayar as $trans) 
                  <tr>
                    <td>{{$trans->nama_barang}}</td>
                    <td>{{$trans->harga_jual}}</td>
                    <td>{{$trans->jumlah_barang}}</td>
                    <td>{{$trans->total_harga}}</td>
                    <td>
                    <form action="{{ url('transaksi/'. $trans->id) }}" method="GET">
                    @csrf
                        @method('DELETE')

                        <!-- <a class="btn btn-primary" href="{{ url('transaksi/'. $trans->kd_transaksi . '/edit') }}">Edit</a> -->


                        <button type="submit" class="btn btn-danger" onclick="return confirm('Data akan di hapus');">Delete</button>
                    </form>
                       

                  </td>  
                  </tr>
                  @endforeach    
              </tbody>
              </table> 
              
              <br> <br>
              <div class="pull-right">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bayarModal">Bayar </button>
</div>
@include('transaksi._modalBayar')
              </div>
            </div>
            </div>
        <script type="text/javascript">
        <?php echo $jsArrayNama; ?>
        function changeValueNama(id){
            console.log(id);
            console.log(nama_barangName);
            document.getElementById('stok_barang').value = nama_barangName[id].stok_barang;
           
        }

        </script>
        <script>
        document.querySelector(".your_class").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
});
</script>
        
        
@endsection