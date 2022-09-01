<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



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
        $this->app->singleton(
            \App\Repositories\Tag\TagRepositoryInterface::class,
            \App\Repositories\Tag\TagRepository::class
        );

        $this->app->singleton(
            \App\Repositories\Auth\AuthRepositoryInterface::class,
            \App\Repositories\Auth\AuthRepository::class
        );

        

        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('frontend.includes.modal',function($view){
            if(Auth::guard('customer')->check()){
                $customer =   Auth::guard('customer')->user()->id;
                $cart = DB::table('carts')->where('customer_id',$customer)->get();
                $view->with([
                'carts'=>$cart
            ]);
            }
            

        });
    }
}
