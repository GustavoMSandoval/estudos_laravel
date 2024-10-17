<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Policies\ProdutoPolicy;

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
    public function boot()
    {
        $categoriasMenu = Category::all();
        view()->share('categoriasMenu', $categoriasMenu);

        Gate::define('verProduto', [ProdutoPolicy::class,'verProduto']);
    }
}
