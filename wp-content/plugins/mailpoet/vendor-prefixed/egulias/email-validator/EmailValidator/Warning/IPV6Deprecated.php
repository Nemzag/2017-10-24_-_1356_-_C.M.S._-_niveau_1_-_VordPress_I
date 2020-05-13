<?php

namespace MailPoetVendor\Egulias\EmailValidator\Warning;

if (!defined('ABSPATH')) exit;


class IPV6Deprecated extends \MailPoetVendor\Egulias\EmailValidator\Warning\Warning
{
    const CODE = 13;
    public function __construct()
    {
        $this->message = 'Deprecated form of IPV6';
        $this->rfcNumber = 5321;
    }
}
