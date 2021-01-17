@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12">
            <h3 class="description">Halaman User Restaurant 24</h3>

            <div class="card">
              <div class="card-header">
                <strong>Tambah User</strong>
              </div>
              <div class="card-body">
              <!---
              @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as  $error)
                                    <li>{{$error}}</li>
                                @endforeach 
                            </ul>
                        </div>
                    @endif
                  --->
                <form action="{{url('admin/user')}}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                         @include('template.utils.errors', ['item' => 'nama'])
                        <input type="text" class="form-control" id="nama" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="username">Username</label>
                        <!-- cara pertama tanpa item-->
                        @if($errors->has('username'))
                        <label for="" class="label text-danger">{{$errors->get('username')[0]}}</label>
                        @endif
                        <!-- cara pertama tanpa item-->
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="email">Alamat Email</label>
                        @include('template.utils.errors', ['item' => 'email'])
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        @include('template.utils.errors', ['item' => 'password'])
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      <div class="form-group">
                        <label for="password">No HP</label>
                        @include('template.utils.errors', ['item' => 'user_hp'])
                        <input type="text" class="form-control" id="user_hp" name="user_hp">
                      </div>
                       <!--
                      <div class="form-group">
                        <label for="jenis_kelamin">jenis kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                      </div>
                      -->
                      @include('template.utils.errors', ['item' => 'jenis_kelamin'])
                      <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                      
                          <option selected="" disabled="">-- Jenis kelamin --</option>
                        
                         <option value="1">laki</option>
                          <option value="2">perempuan</option>
                        </select>
                      <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
              </div>
            </div>
          </div>
        </div>




@endsection