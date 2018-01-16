<?php

namespace App\Providers;

use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Permission;
use Encore\Admin\Auth\Database\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        $callback = function () {
            return false;
        };

//        Menu::saving($callback);
//        Role::saving($callback);
//        Permission::saving($callback);
//        Administrator::saving($callback);
//
//        Menu::deleting($callback);
//        Role::deleting($callback);
//        Permission::deleting($callback);
//        Administrator::deleting($callback);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
