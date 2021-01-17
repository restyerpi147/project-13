<?php 


namespace App\Http\Controllers;
use App\Models\Makanan;
use App\Models\ClientMakanan;
use App\Models\Provinsi;


/**
 * 
 */
class ClientMakananController extends Controller
{

	function index()
	{
		
		$data['list_makanan'] = Makanan::Paginate(4);
		
		return view('client/index', $data);
	}
	
	function create(Makanan $makanan)
	{	
		$data['list_provinsi'] = Provinsi::all();
		$data['makanan'] = $makanan;
		return view('client/create', $data);
	}
	


	function store(Makanan $makanan)
	{
		$data['makanan'] = $makanan;
		$pesanan = new ClientMakanan;
		$pesanan->nama = request('nama');
		$pesanan->harga = request('harga');
		$pesanan->jumlah = request('jumlah');
		$pesanan->save();

		return redirect('bayar')->with('success', 'Makanan Berhasil di Pesan');
	}
	
	function show()
	{	
		
		$data['list_pesanan'] = ClientMakanan::all();
		return view('client/bayar', $data);
	}
	
	function edit(ClientMakanan $makanan)
	{
		$data['makanan'] = $makanan;
		return view('client/edit', $data);
		
	}
	
	function update(ClientMakanan $makanan)
	{
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		$makanan->jumlah = request('jumlah');
		$makanan->save();

		return redirect('bayar')->with('success', 'Pesanan Berhasil di Update');
	}
	
	function destroy(Makanan $makanan)
	{
		$makanan->delete();

		return redirect('bayar')->with('danger', 'Pesanan Berhasil di Hapus');
	}

		function filter(){
		$nama = request('nama');
		$kategori = explode(",", request('kategori'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_makanan'] = Makanan::where('nama_makanan', 'like' "%$nama_makanan%") -> get();
		//$data['list_makanan'] = Makanan::whereIn('kategori_makanan', $kategori_makanan)->get();
		//$data['list_makanan'] = Makanan::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_makanan'] = Makanan::where('kategori_makanan', '<>', $kategori_makanan) -> get();
		//$data['list_makanan'] = Makanan::whereNotIn('kategori_makanan', $kategori_makanan)->get();
		

		$data['list_makanan'] = Makanan::where('nama','like', "%$nama%")->whereIn('kategori', $kategori)->whereYear('created_at', '2020')->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['kategori'] =  request('kategori');

		return view('client/index', $data);
	}

	

}