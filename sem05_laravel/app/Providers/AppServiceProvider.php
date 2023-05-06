<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \PHPSupabase\Service;
use Illuminate\Support\Facades\Log;

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
        /* $service = new Service(
            'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imtlb3pxZXN0dGl6d3hlemdkY2d6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE2ODMzMDg3NjksImV4cCI6MTk5ODg4NDc2OX0.8C9v5J_9g-cI9v0yonHdPkg52b5j7s_qS4PEyfZ3HxQ',
            'https://keozqesttizwxezgdcgz.supabase.co'
        );
        $auth = $service->createAuth();
        Log::channel('single')->info(print_r($auth,true)); */
    }
}
