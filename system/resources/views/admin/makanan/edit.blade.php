@extends('template.base')


      @section('content')
      <h3 class="description">Halaman Update Makanan Restaurant 24</h3>
        <div class="row">
        
          <div class="col-md-3">
            <div  class="card">
                <div class="card-body">
                  <img src="{{url('public', $makanan->foto)}}" alt="" class="img-fluid">
                  </br>
                  <p class="center"> Makanan: {{$makanan->nama}} </p>
                  <p class="center">Harga:Rp. {{number_format($makanan->harga)}} </p>
                </div>

            </div>
          </div>
          <div class="col-md-9">
            
            <div class="card">
            	<div class="card-header">
            		<strong>Ubah data Makanan</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/makanan', $makanan->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                          <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$makanan->nama}}">
                      </div>
                      <div class="form-group">
                        <label for="nama">Harga Makanan</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{$makanan->harga}}">
                      </div>
                
                      <div class="form-group">
                        <label for="makanan">Kategori Makanan</label>
                        <select class="form-control" id="kategori" name="kategori">
                          <option selected="">{{$makanan->kategori}}</option>
                          <option disabled=""></option>
                          <option value="Makanan Pembuka">Makanan Pembuka</option>
                          <option value="Makanan Ringan">Makanan Ringan</option>
                          <option value="Makanan Berat">Makanan Berat</option>
                          <option value="Makanan Penutup">Makanan Penutup</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nama">Deskripsi Makanan</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5">{{$makanan->deskripsi}}</textarea>
                      </div>
                    <div class="card" style="width:400px">
                    <div class="card-body">
                    <h4 class="card-title">Masukan Foto </h4>
                    <label for="nama">Foto Makanan</label>
                    <input type="file" class="form-control" id="foto" name="foto" accepted=".png">
                    </div>
                    </div>
                      <button type="submit" class="btn btn-primary">Ubah data</button>
                    </form>
            	</div>
            </div>
          </div>
        </div>




@endsection

@push('style')
   <!-- css summernote untuk text -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush 

@push('script')
   <!-- js summernote untuk text -->
<script>
  $(document).ready(function() {
  $('#deskripsi').summernote();
});
  </script>
@endpush