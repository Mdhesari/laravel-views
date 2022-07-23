<?php

namespace Mdhesari\LaravelViews;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mdhesari\LaravelViews\Skeleton\SkeletonClass
 */
class LaravelViewsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-views';
    }
}
