<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','frontendContro@getHome');
Route::get('detail/{id}/{slug}.html','frontendContro@getDetail');
Route::get('category/{id}/{slug}.html','frontendContro@getCategory');
Route::post('comment/{id}','frontendContro@getComment');
Route::get('search','frontendContro@getSearch');
Route::group(['prefix'=>'cart'],function(){
  Route::get('add/{id}','cartContro@getAdd');
  Route::get('cartadd','cartContro@cartAdd');
  Route::get('delete/{id}','cartContro@cartDelete');
  Route::get('update','cartContro@cartUpdate');
  Route::post('email','cartContro@cartEmail');
});
Route::get('complete','cartContro@Complete');


Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'login','middleware'=>'checklogin'],function(){
           Route::get('user','loginContro@getlogin');
           Route::post('user','loginContro@postlogin');
}); 
        
        Route::get('logout','homeContro@logout');  
   
    Route::group(['prefix'=>'home','middleware'=>'checklogout'],function(){
           
           Route::get('userhome','homeContro@gethome');
          
           Route::group(['prefix'=>'category'],function(){
           Route::get('danhmuc','icategoryContro@getDanhmuc');
           Route::post('danhmuc','icategoryContro@postDanhmuc');
           Route::get('sua/{id}','icategoryContro@getSua'); 
           Route::post('sua/{id}','icategoryContro@postSua'); 
           Route::get('xoa/{id}','icategoryContro@getXoa'); 
       });

});
    Route::group(['prefix'=>'home','middleware'=>'checklogout'],function(){
           
           Route::get('userhome','homeContro@gethome');
          
           Route::group(['prefix'=>'product'],function(){

           Route::get('dmproduct','productContro@getproduct');

           Route::get('add','productContro@getAddproduct');
           Route::post('add','productContro@postAddproduct');

           Route::get('edit/{pr_id}/{ca_id}','productContro@getEdit'); 
           Route::post('edit/{id}','productContro@postEdit'); 
           Route::get('delete/{id}','productContro@getdelete'); 
       });
       
});   
});
