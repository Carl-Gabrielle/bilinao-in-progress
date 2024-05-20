<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Http\Controllers\CartController;
use App\Http\Controllers\decorationController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $cartItemCount = 0;
            if (Auth::check()) {
                $cartController = new decorationController();
                $cartItemCount = $cartController->getCartItemCount();
            }
            $view->with('cartItemCount', $cartItemCount);
        });
    }
}
