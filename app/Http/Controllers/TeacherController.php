<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Teacher;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index(){
        
        $teacher = Teacher::all();
        // $teacher = Teacher::where('id_teacher', 1)->get();
        // $teacher = Teacher::where('name', 'like' , '%kia%')->get();
        // $teacher = Teacher::paginate(10);
        // dd($teacher);
            
        return view('teacher/index', ['teacher' => $teacher ]);
    }
    
    public function add(){
        return view('teacher/add');
    }

    public function store(Request $req){
        
        // dd($req);
        $this->validate($req,[
    		'name' => 'required',
    		'address' => 'required'
    	]);
 
        Teacher::create([
    		'name' => $req->name,
    		'address' => $req->address
    	]);
 
    	return redirect('/teacher');
    }

    public function edit($id){

        $teacher = Teacher::find($id);

        return view('teacher/edit', ['teacher'=> $teacher]);
    }

    public function update($id, Request $req){
         
         $this->validate($req,[
            'name' => 'required',
            'address' => 'required'
         ]);
      
         $teacher = Teacher::find($id);
         $teacher->name = $req->name;
         $teacher->address = $req->address;
         $teacher->save();
         return redirect('teacher');
    }

    public function delete($id){

        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->back();
    }

    public function trash(){
    	// mengampil data guru yang sudah dihapus
    	$teacher = Teacher::onlyTrashed()->get();
    	return view('teacher/trash', ['teacher' => $teacher]);
    }

    public function restore($id){
        $teacher = Teacher::onlyTrashed()->where('id_teacher', $id);
        $teacher->restore();
    	return redirect()->back();
    }

    public function restore_all(){
        $teacher = Teacher::onlyTrashed();
        $teacher->restore();
        return redirect()->back();
    }

    public function permanent_delete($id){
        $teacher = Teacher::onlyTrashed()->where('id_teacher', $id);
        $teacher->forceDelete();
        return redirect()->back();
    }

    public function permanent_delete_all(){
        $teacher = Teacher::onlyTrashed();
        $teacher->forceDelete();
        return redirect()->back();
    }
}
