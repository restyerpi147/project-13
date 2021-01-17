<?php 

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\SettingStoreRequest;

/**
 * 
 */
class SettingController extends Controller
{
	use Notifiable;
	function index(){
		$data['user'] = Auth::user();
		return view('setting.index', $data);
	}
	
	function store(SettingStoreRequest $request){
		
		if(request('current')){
			$user = Auth::user();
			$check = Hash::check(request('current'), $user->password);
			
			if(request('current')){
				if(request('new') != request('confirm')){
					$user->password = request('new');
					$user->save();
					return back()->with('succes', 'Password berhasil di ubah');
				
				}else{
					return back()->with('danger', 'Password baru tidak cocok');
				}
			}else{
				return back()->with('danger', 'Password Sekarang tidak cocok');
			}
		}else{
			return back()->with('danger', 'Paswword Kosong');
		}

	}
}



