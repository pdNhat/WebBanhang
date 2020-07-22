<?php

namespace App\Http\Controllers;
use Cart;
use DB;
use Illuminate\Http\Request;
use App\product;
use Mail;
class cartContro extends Controller
{
    //
    public function getAdd($id)
     {
    	 
          $product = product::find($id); 
    	  Cart::add(['id' => $product->pr_id, 'name' => $product->pr_name, 'quantity' =>1, 'price' => $product->pr_price, 'attributes' => ['img' => $product->pr_img]]);
    	   
    	return redirect('cart/cartadd');
       

         
    }
    public function cartAdd()
    {
    	 $data['items'] = Cart::getContent();
    	 return view('frontend.cart',$data);
    }
    public function cartDelete($id)
    {
    	if($id == 'all')
    	{
    		 Cart::clear();
    	}
    	else
    	{
    		
            Cart::remove($id);
         
    	}
        return back();
    }
    public function cartUpdate(Request $request)
    {
          Cart::update($request->id,array(
  'quantity' => array(
      'relative' => false,
      'value' => $request->qty
  ),
));
    }
    public function cartEmail(Request $request)
    {
         


           return redirect('complete');

    }
    public function complete()
    {
    	return view('frontend.complete');
    }

}
