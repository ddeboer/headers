<?php

namespace Ddeboer\Header\Test\Mail;

use Ddeboer\Headers\Mail\MailHeaders;

class MailHeadersTest extends \PHPUnit_Framework_TestCase
{
    public function testGmailHeadersFromString()
    {
        $string = 'Delivered-To: j.bond@mi6.co.uk
Received: by 1.2.3.4 with SMTP id cv10csp22142qcb;
        Thu, 26 Jul 2012 00:11:21 -0700 (PDT)
Received: by 1.1.2.3 with SMTP id p10mr10878781wiy.21.1343286681214;
        Thu, 26 Jul 2012 00:11:21 -0700 (PDT)
Return-Path: <q@mi6.co.uk>
Received: from mail-wi0-f182.google.com (mail-wi0-f182.google.com [209.85.212.182])
        by mx.google.com with ESMTPS id z8si8819157wiw.40.2012.07.26.00.11.20
        (version=TLSv1/SSLv3 cipher=OTHER);
        Thu, 26 Jul 2012 00:11:21 -0700 (PDT)
Received-SPF: pass (google.com: domain of mi6designates 209.85.212.182 as permitted sender) client-ip=209.85.212.182;
Authentication-Results: mx.google.com; spf=pass (google.com: domain of siuyinmak@gmail.com designates 209.85.212.182 as permitted sender) smtp.mail=siuyinmak@gmail.com; dkim=pass header.i=@gmail.com
Received: by mail-wi0-f182.google.com with SMTP id hq12so1267115wib.11
        for <boerdedavid@gmail.com>; Thu, 26 Jul 2012 00:11:20 -0700 (PDT)
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed;
        d=gmail.com; s=20120113;
        h=from:content-type:subject:date:references:to:message-id
         :mime-version:x-mailer;
        bh=Si/HhNvdMxe2190kl38HrXKXSTUB76xN2h4vToVgCRY=;
        b=tr5UAUf4Ygv2wkL92WhhfgGb0reEmLgxRxfga5R3UPcBRPkh8YhQwcKlTWC6c1Xlpw
         o8/GhHn0Y7bYasYzZxsX6ckAoraC9h6+x7rDG+bv9nulPVPzaF/ruqtPZ/oSsFSrehrb
         UuO8fcb9yZh/X+gsR/243RELesn++yXFjSDBI4R/C+MT75+JoRuDWlCq7sYUFcgusXsg
         TEbu3iLC7tb7LglcC4aEFUFrl476zjND1ZFFiBqb/FS5zHZBxc3hV8U6QJpsexPAsvMt
         /WFt1DwNN3mTnCdriqiu3az1FbP+FMG0BResiIaHKtyHdHQQnOtFfL5XMaFw7R4SynEo
         pmYw==
Received: by 10.180.90.195 with SMTP id by3mr10778903wib.7.1343286680598;
        Thu, 26 Jul 2012 00:11:20 -0700 (PDT)
Return-Path: <siuyinmak@gmail.com>
Received: from makmac.home (82-169-175-133.ip.telfort.nl. [82.169.175.133])
        by mx.google.com with ESMTPS id ef5sm10450076wib.3.2012.07.26.00.11.17
        (version=TLSv1/SSLv3 cipher=OTHER);
        Thu, 26 Jul 2012 00:11:18 -0700 (PDT)
From: Siu Yin Mak <siuyinmak@gmail.com>
Content-Type: multipart/alternative; boundary="Apple-Mail=_3054E57A-7429-496A-9FB9-ED0F81807F5C"
Subject: Fwd: Uw bestelling wordt vandaag verzonden
Date: Thu, 26 Jul 2012 09:11:18 +0200
References: <824717608.12181343224862819.JavaMail.wcuser@blokker-com03.colo.bit.nl>
To: David de Boer <boerdedavid@gmail.com>
Message-Id: <3F03AE7D-E24D-41FB-85F7-4F108B422F88@gmail.com>
Mime-Version: 1.0 (Apple Message framework v1278)
X-Mailer: Apple Mail (2.1278)';
        $header = MailHeaders::fromString($string);
        foreach ($header as $key => $value) {
            echo $key .": ";
            var_dump($value);
            echo "\n";
        }


    }
}