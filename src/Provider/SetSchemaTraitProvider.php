<?php

namespace QuantumTecnology\SetSchemaTrait\Provider;

use Illuminate\Support\ServiceProvider;

class SetSchemaTraitProvider extends ServiceProvider
{
    public $bindings = [
        ServerProvider::class => SetSchemaTrait::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
