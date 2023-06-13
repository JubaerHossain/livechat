<?php

namespace Jubaer\LiveChat\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Jubaer\LiveChat\Talk;

/**
 * This is the service provider test class.
 */
class TalkServiceProviderTest extends TestCase
{
    use ServiceProviderTrait;

    public function testTalkIsInjectable()
    {
        $this->assertIsInjectable(Talk::class);
    }
}
