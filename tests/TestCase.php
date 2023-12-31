<?php

namespace Jubaer\LiveChat\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Jubaer\LiveChat\TalkServiceProvider;

/**
 * This is the abstract test case class.
 */
abstract class TestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return TalkServiceProvider::class;
    }
}
