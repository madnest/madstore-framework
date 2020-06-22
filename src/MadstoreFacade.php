<?php

namespace Madnest\Madstore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Madnest\Madstore\Skeleton\SkeletonClass
 */
class MadstoreFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'madstore';
    }
}
