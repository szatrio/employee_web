<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Photo;
use File;
 
class PhotoController extends Controller
{
	public function upload(){
		$photo = Photo::get();
		return view('photo/upload',['photo' => $photo]);
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
    
    public function delete($id){
        // hapus file
        $photo = Photo::where('id',$id)->first();
        File::delete('data_file/'.$photo->file);
     
        // hapus data
        Photo::where('id',$id)->delete();
     
        return redirect()->back();
    }
}