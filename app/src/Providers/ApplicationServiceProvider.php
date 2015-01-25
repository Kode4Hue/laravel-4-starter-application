<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{
    public function register()
    {
         $this->app->bind(
                'App\Repositories\System\User\IUserRepository', 
                'App\Repositories\System\User\UserRepository'
        );
    }
    
}
