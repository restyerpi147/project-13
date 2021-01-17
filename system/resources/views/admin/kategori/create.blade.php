@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Kategori Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Tambah Kategori</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/kategori')}}" method="post">
                        @csrf
                          <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                          </div>
                          <button type="submit" class="btn btn-primary">Tambah data</button>
                    </form>
            	</div>
            </div>
          </div>
        </div>




@endsection