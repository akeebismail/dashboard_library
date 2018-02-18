<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 1/18/18
 * Time: 11:53 PM
 */
namespace App\Providers;

use App\LibraryRepo\LibraryRepository;
use Illuminate\Support\ServiceProvider;

class TimeServiceProvider extends ServiceProvider{

    public function boot(){
        view()->composer('layouts.app',function ($view){
            $lib = new LibraryRepository;
            $view->with('time',$lib->getClosingTime());
        });
    }

    public function lib_time(){

    }
}