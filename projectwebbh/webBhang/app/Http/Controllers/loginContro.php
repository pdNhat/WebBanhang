<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginContro extends Controller
{
    //
    public function getlogin()
    {
    	return view('backend.login');
    }
    public function postlogin(Request $request)
    {
    	if($request->remenber = "on")
    	{
    		$arr = true;
    	}
    	else
    	{
    		$arr = false;
    	}
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$arr))
    	{
    		return redirect()->intended('admin/home/userhome');
    	}
    	else
    	{

    		return back()->withInput()->with('error','Tài khoản hoặc mật khẩu chưa đúng');
    	}

    }
}
