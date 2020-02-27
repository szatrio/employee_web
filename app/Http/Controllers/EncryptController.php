<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptController extends Controller
{
    public function encrypt(){
		$encrypted = Crypt::encryptString('Satrio Utomo');
		$decrypted = Crypt::decryptString($encrypted);
 
		echo "Hasil Enkripsi : " . $encrypted;
		echo "<br/>";
		echo "<br/>";
		echo "Hasil Dekripsi : " . $decrypted;
    }
    
    public function data(){
		
		$parameter =[
			'name' => 'Satrio Utomo',
			'job' => 'Software Engineer',
		];
		$encrypt= Crypt::encrypt($parameter);
		echo "<a href='/data/".$encrypt."'>Klik</a>";
	}
 
	public function data_process($data){
		$data = Crypt::decrypt($data);
 
		echo "Nama : " . $data['name'];
		echo "<br/>";
		echo "Pekerjaan : " . $data['job'];
	}
}
