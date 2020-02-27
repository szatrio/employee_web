<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // menampilkan isi session
	public function index(Request $request) {
		if($request->session()->has('name')){
			echo $request->session()->get('name');
		}else{
			echo 'Tidak ada data nama dalam session.';
		}
	}
 
	// membuat session
	public function add(Request $request) {
		$request->session()->put('name','Satrio Utomo');
		echo "Data telah ditambahkan ke session.";
	}
 
	// menghapus session
	public function delete(Request $request) {
        // $name = $request->session()->get('name');
        $request->session()->forget('name');
		echo "Data nama telah dihapus dari session.";
	}
}
