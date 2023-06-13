<?php

namespace Jubaer\LiveChat\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Jubaer\LiveChat\Tests\TestCase;

/**
 * This is the Talk facade test class.
 */
class Talk extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'talk';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return \Jubaer\LiveChat\Facades\Talk::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \Jubaer\LiveChat\Talk::class;
    }
}
