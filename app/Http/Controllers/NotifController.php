<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class NotifController extends Controller
{
    public function index(){
		return view('flash/notification');
	}
 
	public function success(){
		Session::flash('success','Ini notifikasi SUKSES');
		return redirect('message');
	}
 
	public function warning(){
		Session::flash('warning','Ini notifikasi PERINGATAN');
		return redirect('message');
	}
 
	public function failed(){
		Session::flash('failed','Ini notifikasi GAGAL');
		return redirect('message');
	}
}
