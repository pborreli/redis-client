<?php

namespace Blablacar\Test;

use Blablacar\Redis\Client as BaseClient;

class Client extends BaseClient
{
    public function get()
    {
        return $this->__call('get', func_get_args());
    }

    public function set()
    {
        return $this->__call('set', func_get_args());
    }

    public function setex()
    {
        return $this->__call('setex', func_get_args());
    }

    public function setnx()
    {
        return $this->__call('setnx', func_get_args());
    }

    public function expire()
    {
        return $this->__call('expire', func_get_args());
    }
}