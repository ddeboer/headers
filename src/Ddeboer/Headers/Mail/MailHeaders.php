<?php

namespace Ddeboer\Headers\Mail;

use Ddeboer\Headers\HeaderCollection;

/**
 * The header part of an e-mail message
 *
 * @link http://tools.ietf.org/html/rfc5322#section-2.2
 */
class MailHeaders extends HeaderCollection
{
    public function getMessageId()
    {
        return $this->get('Message-ID');
    }

    public function getTo()
    {

    }

    public function getFrom()
    {

    }
}