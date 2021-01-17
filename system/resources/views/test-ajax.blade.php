@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Provinsi</label>
                                <select name=""  class="form-control" onchange="gantiProvinsi(this.value)">
                                     <option value="">Pilih Provinsi Dulu</option>
                                    @foreach($list_provinsi as $provinsi)
                                    <option value="{{$provinsi->id_provinsi}}">{{$provinsi->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten</label>
                                <select name=""  class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)" >
                                <option value="">Pilih Kabupaten Dulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label" >Desa</label>
                                <select name=""  class="form-control" id="desa" onchange="gantiDesa(this.value)"> 
                                <option value="">Pilih Desa Dulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                                <select name=""  class="form-control" id="kecamatan">
                                <option value="">Pilih Kecamatan Dulu</option>
                                </select>
                            </div>    
                        </div>
                    </div>
                </div>
            <div>
        </div>
        </div>
   </div>
</div>


@endsection

@push('script')
    <script>
        function gantiProvinsi(id){
            $.get("api/provinsi/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#Kabupaten").html(option)
            });
        }
        function gantiKabupaten(id){
            $.get("api/kabupaten/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#Desa").html(option)
            });

        }

        function gantiDesa(id){
            $.get("api/desa/"+id, function(result){
                result = JSON.parse(result)
                option = ""
                for(item of result){
                option += `<option value="${item.id}">${item.name}</option>`;
                }
                $("#kecamatan").html(option)
            });

        }
       
    </script>
@endpush
 