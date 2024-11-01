<?php
namespace Pondol\Components;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ComponentsServiceProvider extends ServiceProvider { //  implements DeferrableProvider
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
    //public function boot(\Illuminate\Routing\Router $router)
  public function boot(\Illuminate\Routing\Router $router)
  {
    $this->loadViewsFrom(__DIR__.'/resources/views', 'pondol');
    // Blade::componentNamespace('Pondol\\Components\\Views\\Components', 'pondol');
  }
}
