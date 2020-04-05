<?php

namespace App\Providers;
use App\Models\Service;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Shop;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['appointments.fields'], function ($view) {
            $serviceItems = Service::pluck('name','id')->toArray();
            $view->with('serviceItems', $serviceItems);
        });
        View::composer(['appointments.fields'], function ($view) {
            $employeeItems = Employee::pluck('full_name','id')->toArray();
            $view->with('employeeItems', $employeeItems);
        });
        View::composer(['appointments.fields'], function ($view) {
            $shopItems = Shop::pluck('name','id')->toArray();
            $view->with('shopItems', $shopItems);
        });
        View::composer(['appointments.fields'], function ($view) {
            $clientItems = Client::pluck('full_name','id')->toArray();
            $view->with('clientItems', $clientItems);
        });
        View::composer(['working_hours.fields'], function ($view) {
            $employeeItems = Employee::pluck('full_name','id')->toArray();
            $view->with('employeeItems', $employeeItems);
        });
        View::composer(['employees.fields'], function ($view) {
            $shopItems = Shop::pluck('name','id')->toArray();
            $view->with('shopItems', $shopItems);
        });
        View::composer(['services.fields'], function ($view) {
            $shopItems = Shop::pluck('name','id')->toArray();
            $view->with('shopItems', $shopItems);
        });
    }
}
