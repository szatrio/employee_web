<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use PDF;

//console.log
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class EmployeeController extends Controller{
    public function index(){
        // $skills = ["PHP","Java","Golang", "Python"];
        // return view('employeelist', ['name' => $name, 'skills' => $skills]);
        // mengambil data dari table pegawai
        
        $employee = DB::table('employee')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['employee' => $employee]);
    }

    public function pagination(){

        $employee = DB::table('employee')->paginate(10);
 
    	// mengirim data pegawai ke view index
    	return view('pagination',['employee' => $employee]);
    }

    public function search(Request $req){
                // menangkap data pencarian
        // debug_to_console($req->name);
        $this->validate($req,[
            // 'search' => 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'search' => 'alpha',
        ]);
        $search = $req->search;
            // mengambil data dari table pegawai sesuai pencarian data
        $employee = 
        // DB::table('employee')->get();
        DB::table('employee')
        ->where('name','like',"%".$search."%")->paginate();
 
    	// mengirim data pegawai ke view index
    	return view('index',['employee' => $employee]);
    }

    public function add(){
        $employee = DB::table('employee')->get();
 
    	// mengirim data pegawai ke view index
    	return view('add');
    }

    public function store(Request $req){
        DB::table('employee')->insert([
            'name' => $req->name,
            'position' => $req->position,
            'age' => $req->age,
            'address' => $req->address
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/employee');
    }

    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $employee = DB::table('employee')->where('id_employee',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['employee' => $employee]);
    }
    
    public function update(Request $req){
	    // update data pegawai
        DB::table('employee')->where('id_employee',$req->id)->update([
            'name' => $req->name,
            'position' => $req->position,
            'age' => $req->age,
            'address' => $req->address
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/employee');
    }

    public function delete($id){
	    // update data pegawai
        DB::table('employee')->where('id_employee',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/employee');
    }

    public function form(){
    	return view('formulir');
    }
    public function process(Request $request){
        $name = $request->input('name');
     	$address = $request->input('address');
        return "Nama : ".$name.", Alamat : ".$address;
    }

    public function print_pdf(){
    	$employee = DB::table('employee')->get();
 
    	$pdf = PDF::loadview('employee_pdf',['employee'=>$employee]);
    	return $pdf->download('laporan-pegawai.pdf');
    }
}