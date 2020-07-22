<?php

namespace App\Http\Controllers;
use App\Http\Requests\editrequests;
use App\Http\Requests\addrequests;
use Illuminate\Http\Request;
use App\icategory;
use Illuminate\Support\Str;
class icategoryContro extends Controller
{
    //
    public function getDanhmuc()
    {
    	$data = icategory::all();
    	return view('backend.category',['data'=>$data]);

    }

    public function getSua($id)
    {
    	$data = icategory::find($id);
    	return view('backend.editcategory',['data'=>$data]);
    }
    public function postSua($id,editrequests $request)
    {
    	
    	
    	$data = icategory::find($id);
    	$data->ca_name = $request->name;
        $data->ca_slug = str::slug($request->name);
        $data->save();

         return redirect('admin/home/category/danhmuc');
    }
    public function getXoa($id)
    {
       $data = icategory::find($id);
       $data->delete();
         return back();
    }
    public function postDanhmuc(addrequests $request)
    {
    	
        $data = new icategory();
        $data->ca_name = $request->name;
        $data->ca_slug = Str::slug($request->name);
        $data->save();
          
        return back();

    }
}

