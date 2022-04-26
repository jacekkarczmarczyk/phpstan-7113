<?php

require __DIR__ . '/../vendor/autoload.php';

function f(Swift_Attachment $s): void
{
    print_r($s);
}

f(new Swift_Attachment());
