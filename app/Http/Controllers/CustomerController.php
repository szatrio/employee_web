<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
    	// mengambil semua data pengguna
    	$customer = Customer::all();
    	// return data ke view
    	return view('customer/index', ['customer' => $customer]);
    }
}
