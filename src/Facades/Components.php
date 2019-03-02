<?php

namespace Shetabit\Components\Facades;

use Illuminate\Support\Facades\Facade;

class Components extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Components';
    }
}
