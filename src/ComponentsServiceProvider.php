<?php
namespace Pondol\Components;

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
    $this->loadViewsFrom(__DIR__.'/resources/views', 'pondol');
  }
}
