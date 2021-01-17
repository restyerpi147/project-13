<form action="{{$url}}" method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus pesanan ini ?')">
	@csrf
	@method("DELETE")

	<button class="btn btn-danger btn-sm"><i class="icofont-trash"></i></button>
</form>