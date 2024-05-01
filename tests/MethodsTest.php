<?php

namespace RayanLevert\Http\Tests;

use RayanLevert\Http\Methods;

class MethodsTest extends \PHPUnit\Framework\TestCase
{
    public function testCases(): void
    {
        $this->assertSame('CONNECT', Methods::CONNECT->value);
        $this->assertSame('DELETE', Methods::DELETE->value);
        $this->assertSame('GET', Methods::GET->value);
        $this->assertSame('HEAD', Methods::HEAD->value);
        $this->assertSame('OPTIONS', Methods::OPTIONS->value);
        $this->assertSame('PATCH', Methods::PATCH->value);
        $this->assertSame('POST', Methods::POST->value);
        $this->assertSame('PURGE', Methods::PURGE->value);
        $this->assertSame('PUT', Methods::PUT->value);
        $this->assertSame('TRACE', Methods::TRACE->value);
    }
}
