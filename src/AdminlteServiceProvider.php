<?php

namespace AhmedAliraqi\Adminlte;

use Illuminate\Support\ServiceProvider;
use AhmedAliraqi\Adminlte\Commands\InstallCommand;
use AhmedAliraqi\Adminlte\Console\Commands\BreadcrumbMakeCommand;

class AdminlteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../public' => public_path(''),
        ], 'adminlte:assets');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'adminlte');
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/adminlte'),
        ], 'adminlte:lang');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminlte');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/adminlte'),
        ], 'adminlte:view');

        $this->mergeConfigFrom(__DIR__.'/../config/adminlte.php', 'adminlte');
        $this->publishes([
            __DIR__.'/../config' => config_path(''),
        ], 'adminlte:config');

        $this->publishes([
            $this->packagePath('resources/stubs/auth/login.blade.php.stub') => base_path('resources/views/auth/login.blade.php'),
            $this->packagePath('resources/stubs/auth/register.blade.php.stub') => base_path('resources/views/auth/register.blade.php'),
            $this->packagePath('resources/stubs/auth/passwords/email.blade.php.stub') => base_path('resources/views/auth/passwords/email.blade.php'),
            $this->packagePath('resources/stubs/auth/passwords/reset.blade.php.stub') => base_path('resources/views/auth/passwords/reset.blade.php'),
            $this->packagePath('resources/stubs/auth/verify.blade.php.stub') => base_path('resources/views/auth/verify.blade.php'),
            $this->packagePath('resources/stubs/home.blade.php.stub') => base_path('resources/views/home.blade.php'),
        ], 'adminlte:auth');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
                BreadcrumbMakeCommand::class,
            ]);
        }
    }

    /**
     * Generate a path relative to the package root directory.
     *
     * @param $path
     * @return string
     */
    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }
}