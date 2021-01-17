@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Kategori Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Kategori</strong>
            		<a href="{{url('admin/kategori/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Nama Kategori</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_kategori as $kategori)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('admin/kategori', $kategori->id)}}" class="btn btn-info btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('template.utils.delete', ['url' => url('admin/kategori', $kategori->id)])
            						</div>
            					</td>
            					<td>{{$kategori->nama}}</td>
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection