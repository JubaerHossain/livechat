<?php
/**
 * Created by PhpStorm.
 * User: claudiopinto
 * Date: 29/10/2018
 * Time: 09:13
 */
namespace Jubaer\LiveChat\Tests\Messages;

use Jubaer\LiveChat\Html\HtmlString;
use Jubaer\LiveChat\Html\HtmlStringInterface;
use Jubaer\LiveChat\Messages\Message;
use Jubaer\LiveChat\Tests\TestCase;

class MessageTest extends TestCase
{
    /**
     * @var  Message
     */
    private $message;

    public function setUp()
    {
        parent::setUp();
        $this->message = new Message(['message' => 'test message']);
    }

    public function tearDown()
    {
        $this->message = null;
        parent::tearDown();
    }

    public function testIsHtmlable()
    {
        $this->assertInstanceOf(HtmlStringInterface::class, $this->message);
    }

    public function testToHtmlString()
    {
        $this->assertInstanceOf(HtmlString::class, $this->message->toHtmlString());
    }
}
