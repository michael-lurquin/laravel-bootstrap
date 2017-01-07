<?php

namespace Lurquinm\LaravelBootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class BootstrapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bootstrap';
    }
}
