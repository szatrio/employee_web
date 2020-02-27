<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class FileController extends Controller
{
	public function upload(){
		return view('file/upload');
	}
 
	public function process(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'description' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$destination = 'data_file';
 
                // upload file
		$file->move($destination,$file->getClientOriginalName());
	}
}