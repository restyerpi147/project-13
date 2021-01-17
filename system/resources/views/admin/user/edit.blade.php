@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman User Restaurant 24</h3>

            <div class="card">
            	<div class="card-header">
            		<strong>Ubah data User</strong>
            	</div>
            	<div class="card-body">
            		<form action="{{url('admin/user', $user->id)}}" method="post">
                    @csrf
                    @method("PUT")
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$user->nama}}">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="password">No HP</label>
                        <input type="text" class="form-control" id="no_handphone" name="no_handphone">
                      </div>
                      <button type="submit" class="btn btn-primary">Ubah data</button>
                </form>
            	</div>
            </div>
          </div>
        </div>




@endsection