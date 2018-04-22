<?php
namespace Surya\Media;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class MediaServiceProvider extends ServiceProvider
{
  public function boot(){
    Schema::defaultStringLength(191);
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
  }

  public function register(){
    $this->publishMigrations();
    $this->publishAssets();
  }

  private function publishMigrations(){
    $this->publishes([__DIR__.'/../migrations' => database_path().'/migrations'], 'migrations');
  }

  private function publishAssets(){

  }
}
