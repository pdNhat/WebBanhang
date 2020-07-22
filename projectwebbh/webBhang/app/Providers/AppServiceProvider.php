<?php

namespace App\Providers;
use Cart;
use App\icategory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = icategory::all();
        $data['items'] = Cart::getContent();
        view()->share('category',$category);
        view()->share($data);
        //
    }
}
