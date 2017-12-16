<?php

namespace Asif\Cfg;
use Illuminate\Support\ServiceProvider;

class CfgServiceProvider extends ServiceProvider
{
	protected $commands = [
        'Asif\Cfg\Commands\CrudFileGenerate',
    ];
	public function boot()
	{
		require __DIR__.'/routes/web.php';

	}

	public function register()
	{
		$this->commands($this->commands);
	}
}