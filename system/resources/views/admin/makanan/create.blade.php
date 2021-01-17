
@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Makanan Restaurant 24</h3>

            <div class="card">
            @include('template.utils.notif')
            	<div class="card-header">
            		<strong>Tambah Makanan</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/makanan')}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        @include('template.utils.errors', ['item' => 'nama'])
                        <input type="text" class="form-control" id="nama" name="nama">
                      
                      </div>
                      <div class="form-group">
                        <label for="nama">Harga Makanan</label>
                        @include('template.utils.errors', ['item' => 'harga'])
                        <input type="text" class="form-control" id="harga" name="harga">
                       
                      </div>
                     
                      @include('template.utils.errors', ['item' => 'kategori'])
                        <select class="form-control" id="kategori" name="kategori">
                          <option selected="" disabled="">-- Pilih Kategori --</option>
                         <option value="Makanan Pembuka">Makanan Pembuka</option>
                          <option value="Makanan Ringan">Makanan Ringan</option>
                          <option value="Makanan Berat">Makanan Berat</option>
                          <option value="Makanan Penutup">Makanan Penutup</option> 
                         
                        </select>
                        
                    

                      <div class="form-group">
                        <label for="nama">Deskripsi Makanan</label>
                        @include('template.utils.errors', ['item' => 'deskripsi'])
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
                      </div>
                    
                    <div class="card" style="width:400px">
                    <div class="card-body">
                      <h4 class="card-title">Masukan Foto </h4>
                      @include('template.utils.errors', ['item' => 'foto'])
                      <label for="nama">Foto Makanan</label>
                      <input type="file" class="form-control" id="foto" name="foto" accepted=".png">
                    
                    </div>
                      
                    </div>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
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