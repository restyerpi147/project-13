<?php 


namespace App\Http\Controllers;
use Livewire\Component;
use App\Models\Product;
use App\Models\Kategori;
use Carbon\Carbon;
use App\Http\Requests\MakananStoreRequest;

/**
 * 
 */
class ProductController extends Controller
{	
	
	
	function index()
	{	
		
		$user = request()->user();
		$data['list_makanan'] = Product::Paginate(4);
		
		return view('admin/makanan/index', $data);
	}
	
	function create()
	{	 
		
		return view('admin/makanan/create');
	}
	
	function store(ProductStoreRequest $request)
	{	
		
		$makanan = new Product;
		$makanan->id_user = request()->user()->id;
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		$makanan->foto = request('foto');
		$makanan->kategori = request('kategori');
		$makanan->deskripsi = request('deskripsi');
		$makanan->created_at = Carbon::now();
		$makanan->save();

		$makanan->handleUploadFoto();
		return redirect('admin/makanan')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Product $product)
	{	
	
		$data['makanan'] = $makanan;
		return view('admin/makanan/show', $data);
	}
	
	function edit(Product $product)
	{
		$data['makanan'] = $makanan;
		return view('admin/makanan/edit', $data);
		
	}
	
	function update(Product $product)
	{
		$makanan->nama = request('nama');
		$makanan->harga = request('harga');
		
		$makanan->kategori = request('kategori');
		$makanan->deskripsi = request('deskripsi');
		$makanan->save();
		$makanan->handleUploadFoto();

		return redirect('admin/makanan')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Product $product)
	{
		$makanan->handleDelete(); 
		$makanan->delete();

		return redirect('admin/makanan')->with('danger', 'Data Berhasil di Hapus');
	}
	function filter(){
		$list_makanan = Product::all();

		$data['makanan'] = Product::simplePaginate(4);
		$nama = request('nama');
		$kategori = explode(",", request('kategori'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_makanan'] = Makanan::where('nama_makanan', 'like' "%$nama_makanan%") -> get();
		//$data['list_makanan'] = Makanan::whereIn('kategori_makanan', $kategori_makanan)->get();
		//$data['list_makanan'] = Makanan::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_makanan'] = Makanan::where('kategori_makanan', '<>', $kategori_makanan) -> get();
		//$data['list_makanan'] = Makanan::whereNotIn('kategori_makanan', $kategori_makanan)->get();
		

		$data['list_makanan'] = Product::where('nama','like', "%$nama%")->whereIn('kategori', $kategori)->whereYear('created_at', '2020')->whereBetween('harga', [$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['kategori'] =  request('kategori');

		return view('admin/makanan/index', $data);
	}
}