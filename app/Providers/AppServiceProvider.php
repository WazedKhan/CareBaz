<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            View::share('cart',Cart::where('user_id',$user_id)->orwhere('ip_address',request()->ip())->get());
        }
        else{
        View::share('cart',Cart::where('ip_address',request()->ip())->where('order_id',null)->get());
        }

        View::share('cate',Category::all());

        View::share('hot',Product::where('discount','>','20')->get());
        View::share('hoter',Product::where('discount','>','50')->get());
        View::share('info',Info::first());
        
    }
}
