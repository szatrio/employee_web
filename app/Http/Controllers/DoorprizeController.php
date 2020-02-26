<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Prize;

class DoorprizeController extends Controller
{
    public function index()
    {
        $member = Member::get();
        
        // dd($member, "ini member");
    	return view('doorprize/index', ['member' => $member]);
    }
}
