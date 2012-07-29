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
        return $this->get('message-id');
    }

    public function getTo()
    {
        return $this->get('to');
    }

    public function getFrom()
    {
        return $this->get('from');
    }

    public function getSubject()
    {
        return $this->get('subject');
    }

    public function getDate()
    {
        return new \DateTime($this->get('date'));
    }

    public function getContentType()
    {
        return $this->get('content-type');
    }
}