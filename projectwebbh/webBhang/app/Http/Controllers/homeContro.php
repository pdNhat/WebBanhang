<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class homeContro extends Controller
{
    //
    public function gethome()
    {
    	return view('backend.master');
    }
    public function logout()
    {

    	Auth::logout();
    	return redirect('admin/login/user');
    }
}
