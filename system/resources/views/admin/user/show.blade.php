@extends('template.base')


      @section('content')
        
        <div class="row">
          <div class="col-md-12 mt-5">

            <div class="card">
            	<div class="card-header">
            		Detail Data 
            	</div>
            	<div class="card-body">
            		<h3>{{$user->nama}}</h3>
            	<hr>
                <p>
                    {{"@".$user->username}}
                    Email : {{$user->email}}
                </p>
                <p>
                    No Handphone :  {{$user->user_hp}}
                </p>	
                <p>
                    {{($user->deskripsi)}}
                </p>
            	</div>
            </div>
          </div>
        </div>




@endsection