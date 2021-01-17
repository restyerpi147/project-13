@extends('template.base')

@section('content')
   
    <div class="div container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-default">
                    <div class="card-header bg-info">
                        Ganti Password
                    </div>
                    <div class="card-body">
                   
                        <form action="{{url('setting')}}" class="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="class">Password Sekarang</label>
                                @include('template.utils.errors', ['item' => 'current'])
                                <input type="password" name="current" id="current" class="form-control">
                            </div>
                            <hr>
                            <div class="\form-group">
                                <label for="" class="class">Password baru</label>
                                @include('template.utils.errors', ['item' => 'new'])
                                <input type="password" name="new" id="new" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="class">Konfirmasi password baru</label>
                                @include('template.utils.errors', ['item' => 'confirm'])
                                <input type="password" name="confirm" id="confirm" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-info"><i class="fa fa-save">Simpan</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection