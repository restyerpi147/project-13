<?php 

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App;


/**
 * 
 */
class HomeController extends Controller
{
	
	function showBeranda()
	{
		return view('admin/index');
	}
	
	function showKategori()
	{
		return view('admin/kategori');
	}
	
	function showProduk()
	{
		return view('admin/produk');
	}
	
	public function testAjax(){
		
			$data['list_provinsi'] = Provinsi::all();
			return view ('test-ajax', $data);
		
	
	}
	
}



