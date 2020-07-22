<?php

namespace App\Http\Controllers;
use App\Http\Requests\addproduct;
use App\Http\Requests\editrequest;
use Illuminate\Http\Request;
use App\product;
use App\icategory;
use DB;
use Illuminate\Support\Str;
class productContro extends Controller
{
    //
    public function getproduct()
    {
           $data = DB::table('product')->join('icategory','product.pr_idcategory','=','icategory.ca_id')->orderBy('product.pr_id','desc')->get();
        return view('backend.product',['data'=>$data]);
    }
    public function getAddproduct()
    {
         $data = icategory::all();
    	return view('backend.addproduct',['data'=>$data]);
    }
    public function postAddproduct(addproduct $request)
    {
    	$filename = $request->img->getClientOriginalName(); 
        $product = new product();
        $product->pr_name = $request->name;
        $product->pr_slug = Str::slug($request->name);
        $product->pr_price = $request->price;
        $product->pr_accessories = $request->accessories;
        $product->pr_waranty = $request->waranty;
        $product->pr_promotion = $request->promotion;
        $product->pr_condition = $request->condition;
        $product->pr_status = $request->status;
        $product->pr_description = $request->description;
        $product->pr_featured = $request->featured;
        $product->pr_idcategory = $request->cate;
        
        $Hinh =Str::random(4).'_'.$filename;
       while(file_exists('upload/product/'.$Hinh))
       {
           $Hinh =Str::random(4).'_'.$filename;
       }
       $product->pr_img = $Hinh;
           $product->save();
       $request->img->move('upload/product/',$Hinh);
               
           return redirect('admin/home/product/dmproduct');
    }
    public function getEdit($pr_id,$ca_id)
    {
        $cate = icategory::all();
        $data = product::find($pr_id);
    	return view('backend.editproduct',['data'=>$data,'cate'=>$cate,'ca_id'=>$ca_id]);
    }
    public function postEdit(editrequest $request,$id)

    {
    	$filename = $request->img->getClientOriginalName(); 

        $product = product::find($id);
        unlink('upload/product/'.$product->pr_img);
        $product->pr_name = $request->name;
        $product->pr_slug = Str::slug($request->name);
        $product->pr_price = $request->price;
        $product->pr_accessories = $request->accessories;
        $product->pr_waranty = $request->waranty;
        $product->pr_promotion = $request->promotion;
        $product->pr_condition = $request->condition;
        $product->pr_status = $request->status;
        $product->pr_description = $request->description;
        $product->pr_featured = $request->featured;
        $product->pr_idcategory = $request->cate;
        
        $Hinh =Str::random(4).'_'.$filename;
       while(file_exists('upload/product/'.$Hinh))
       {
           $Hinh =Str::random(4).'_'.$filename;
       }
       $product->pr_img = $Hinh;
           $product->save();
       $request->img->move('upload/product/',$Hinh);
               
           return redirect('admin/home/product/dmproduct');
    }
    public function getdelete($id)
    {
    	$product = product::find($id);
        $product->delete();
          return back();
    }
}
