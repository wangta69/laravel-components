<?php
namespace Pondol\Components;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentsServiceProvider extends ServiceProvider {
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
  }

  /**
   * Bootstrap any application services.exi
   *
   * @return void
   */
  public function boot()
  {
    $this->registerDirectives();
    $this->loadViewsFrom(__DIR__.'/resources/views', 'pondol');
  }


  public function registerDirectives()
  {
    $directives = require __DIR__.'/directives.php';

    collect($directives)->each(function ($item, $key) {
      Blade::directive($key, $item);
    });
  }
}
