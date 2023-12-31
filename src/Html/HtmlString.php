<?php

namespace Jubaer\LiveChat\Html;

use Embera\Embera;
use Illuminate\Contracts\Support\Htmlable;
use Jubaer\LiveChat\Embera\Adapter;

class HtmlString implements Htmlable
{
    /**
     * @var string
     */
    protected $string;

    /**
     * @var Embera
     */
    protected $driver;

    /**
     * HtmlString constructor.
     *
     * @param $string
     * @param Embera $driver
     */
    public function __construct($string, Embera $driver)
    {
        $this->setDriver($driver);
        $this->setString($string);
    }

    /**
     * Get content as a string of HTML.
     *
     * @return string
     */
    public function toHtml()
    {
        if (config('talk.oembed.enabled')) {
            $parsedUrl = parse_url(config('talk.oembed.url'));
            $this->driver->addProvider(
                $parsedUrl['host'],
                Adapter::class,
                [
                    'api_key' => config('talk.oembed.key'),
                ]
            );
        }

        return $this->driver->autoEmbed($this->string);
    }

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * @return Embera
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param Embera $driver
     */
    public function setDriver($driver)
    {
        $this->driver = $driver;
    }

}
