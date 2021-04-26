<form action="{{ url('bayar/'. $a->id) }}" method="post">
@csrf
@method('put')
    <div class="modal fade" id="bayarModal" tabindex="-1" aria-labelledby="bayarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bayarModalLabel">Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>         
                @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif      
                <div class="modal-body">        
                <br>                         
                @foreach($barangbayar as $a)                             
                    <div class="row">
                        <div class="col-md-5">
                            <label for=""><b>{{$a->nama_barang}}</b></label>
                        </div>
                        <div class="col-md-3">
                            <label for="">{{$a->jumlah_barang}}</label>
                        </div>
                        <div class="col-md-4">
                            <label for="">{{$a->total_harga}}</label>
                        </div>
                    </div>
                @endforeach
<hr>
                <div class="row">
                        <div class="col-md-5">
                            
                        </div>
                        <div class="col-md-3">
                            Total :
                        </div>
                        <div class="col-md-4">
                            <label for=""><b>{{$barangtotal}}</b></label>
                        </div>
                    </div>
                <br>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Uang:</strong>
                                <input type="number" name="uang" class="your_class" placeholder="Masukkan Nomor">
                                <input type="hidden" name="total" value="{{$barangtotal}}">
                        </div>           
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector(".your_class").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
});
</script>
</form>