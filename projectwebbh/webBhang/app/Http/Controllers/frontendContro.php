<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\comment;
class frontendContro extends Controller
{
    //
    public function getHome()
    {
         $product['data'] = product::where('pr_featured',1)->orderBy('pr_id','desc')->take(8)->get();
         $product['newdata'] = product::orderBy('pr_id','desc')->take(8)->get();
    	return view('frontend.home',$product);
    }

    public function getDetail($id)
    {
    	  $product['data'] = product::find($id);
        $product['comment'] = comment::where('cm_idproduct',$id)->get(); 
    	return view('frontend.details',$product);
    }
    public function getCategory($id)
    {
          $data['product'] = product::where('pr_idcategory',$id)->orderBy('pr_id','desc')->paginate(8);
          return view('frontend.category',$data);

    }
    public function getComment(Request $request,$id)

    {
          $comment = new comment;
          $comment->cm_name = $request->name;
          $comment->cm_email = $request->email;
          $comment->cm_content = $request->content;
          $comment->cm_idproduct = $id;
          $comment->save();
           return back();
    }
    public function getSearch(Request $request)
    {
          $search = $request->search;
          $search = str_replace(' ', '%', $search);
          $data['search'] =  $request->search;
          $data['items'] = product::where('pr_name','like','%'.$search.'%')->get();
             return view('frontend.search',$data);

    }
}
