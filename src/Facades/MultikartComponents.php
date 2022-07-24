<?php

namespace Upgrade\MultikartComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Upgrade\MultikartComponents\MultikartComponents
 */
class MultikartComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'multikart-components';
    }
}
