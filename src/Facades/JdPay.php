<?php

namespace Lhyw\JdPay\Facades;

use Illuminate\Support\Facades\Facade;

class JdPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'jdpay';
    }
}