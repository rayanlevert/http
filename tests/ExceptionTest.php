<?php

namespace RayanLevert\Http\Tests;

use RayanLevert\Http\Codes;
use RayanLevert\Http\Exception;

class ExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testGetHttpCode(): void
    {
        $o = new Exception('message test', Codes::CLIENT_BAD_REQUEST);

        $this->assertSame('message test', $o->getMessage());
        $this->assertSame(Codes::CLIENT_BAD_REQUEST->value, $o->getCode());
        $this->assertSame(Codes::CLIENT_BAD_REQUEST, $o->getHttpCode());
    }
}
