<?php

namespace Lhyw\JdPay;

class JdPay
{
    public function __construct($config)
    {
        dump($config);
    }

    public function printRunning()
    {
        echo 'running';
    }
}