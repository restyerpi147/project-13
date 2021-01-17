@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman Kategori Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Detail Kategori</strong>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Nama Kategori</th>
            				</tr>
            			</thead>
            			<tbody>
            				
            				<tr>
            					<td>1</td>
            					
            					<td>{{$kategori->nama}}</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>
        </div>




@endsection