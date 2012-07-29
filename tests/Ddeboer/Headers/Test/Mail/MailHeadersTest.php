<?php

namespace Ddeboer\Header\Test\Mail;

use Ddeboer\Headers\Mail\MailHeaders;

class MailHeadersTest extends \PHPUnit_Framework_TestCase
{
    public function testHeadersFromGmailMessage()
    {
        $string = file_get_contents(__DIR__.'/../Fixtures/Mail/gmail.txt');
        $headers = MailHeaders::fromString($string);
        $this->assertEquals('jamesbond@gmail.com', $headers->get('delivered-to'));
        $this->assertEquals('Q <q@gmail.com>', $headers->get('from'));
        $this->assertInternalType('array', $headers->get('received'));

        $this->assertInstanceOf('\DateTime', $headers->getDate());
    }
}