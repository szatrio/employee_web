<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Photo;
 
class PhotoController extends Controller
{
	public function upload(){
		$photo = Photo::get();
		return view('upload',['photo' => $photo]);
	}
 
	public function process(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'desc' => 'required',
		]);
 
		$file = $request->file('file');
 
		$fileName = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$destination = 'data_file';
		$file->move($destination, $fileName);
 
		Photo::create([
			'file' => $fileName,
			'desc' => $request->desc,
		]);
 
		return redirect()->back();
	}
}