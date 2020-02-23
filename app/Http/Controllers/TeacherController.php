<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(){
        
        // $teacher = Teacher::all();
        // $teacher = Teacher::where('id_teacher', 1)->get();
        // $teacher = Teacher::where('name', 'like' , '%kia%')->get();
        $teacher = Teacher::paginate(10);
        dd($teacher);
            
        return view('teacher_index', ['teacher' => $teacher ]);
    }
    
}
