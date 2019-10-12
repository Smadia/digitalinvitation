<?php

namespace App\Providers;

use Carbon\Carbon;
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
        setlocale(LC_TIME, 'Indonesia');
        Carbon::setLocale('id');

        ini_set('max_execution_time', 1200);
        ini_set('post_max_size', '200M');
        ini_set('upload_max_filesize', '100M');

        // menambah custom helper
        require_once(__DIR__ . '/../Support/helper.php');
    }
}
