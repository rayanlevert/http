<?php

namespace RayanLevert\Http\Tests;

use RayanLevert\Http\Codes;

class CodesTest extends \PHPUnit\Framework\TestCase
{
    public function testCasesSuccessful(): void
    {
        $this->assertSame(200, Codes::SUCCESS_OK->value);
        $this->assertSame(201, Codes::SUCCESS_CREATED->value);
        $this->assertSame(202, Codes::SUCCESS_ACCEPTED->value);
        $this->assertSame(203, Codes::SUCCESS_NON_AUTHORITATIVE_INFORMATION->value);
        $this->assertSame(204, Codes::SUCCESS_NO_CONTENT->value);
        $this->assertSame(205, Codes::SUCCESS_RESET_CONTENT->value);
        $this->assertSame(206, Codes::SUCCESS_PARTIAL_CONTENT->value);
        $this->assertSame(207, Codes::SUCCESS_MULTI_STATUS->value);
        $this->assertSame(208, Codes::SUCCESS_ALREADY_REPORTED->value);
        $this->assertSame(226, Codes::SUCCESS_IM_USED->value);
    }

    public function testCasesRedirection(): void
    {
        $this->assertSame(300, Codes::REDIRECTION_MULTIPLE_CHOICES->value);
        $this->assertSame(301, Codes::REDIRECTION_MOVED_PERMANENTLY->value);
        $this->assertSame(302, Codes::REDIRECTION_FOUND->value);
        $this->assertSame(303, Codes::REDIRECTION_SEE_OTHER->value);
        $this->assertSame(304, Codes::REDIRECTION_NOT_MODIFIED->value);
        $this->assertSame(305, Codes::REDIRECTION_USE_PROXY->value);
        $this->assertSame(306, Codes::REDIRECTION_RESERVED->value);
        $this->assertSame(307, Codes::REDIRECTION_TEMPORARY_REDIRECT->value);
        $this->assertSame(308, Codes::REDIRECTION_PERMANENT_REDIRECT->value);
    }

    public function testCasesClient(): void
    {
        $this->assertSame(400, Codes::CLIENT_BAD_REQUEST->value);
        $this->assertSame(401, Codes::CLIENT_UNAUTHORIZED->value);
        $this->assertSame(402, Codes::CLIENT_PAYMENT_REQUIRED->value);
        $this->assertSame(403, Codes::CLIENT_FORBIDDEN->value);
        $this->assertSame(404, Codes::CLIENT_NOT_FOUND->value);
        $this->assertSame(405, Codes::CLIENT_METHOD_NOT_ALLOWED->value);
        $this->assertSame(406, Codes::CLIENT_NOT_ACCEPTABLE->value);
        $this->assertSame(407, Codes::CLIENT_PROXY_AUTHENTICATION_REQUIRED->value);
        $this->assertSame(408, Codes::CLIENT_REQUEST_TIMEOUT->value);
        $this->assertSame(409, Codes::CLIENT_CONFLICT->value);
        $this->assertSame(410, Codes::CLIENT_GONE->value);
        $this->assertSame(411, Codes::CLIENT_LENGTH_REQUIRED->value);
        $this->assertSame(412, Codes::CLIENT_PRECONDITION_FAILED->value);
        $this->assertSame(413, Codes::CLIENT_PAYLOAD_TOO_LARGE->value);
        $this->assertSame(414, Codes::CLIENT_URI_TOO_LONG->value);
        $this->assertSame(415, Codes::CLIENT_UNSUPPORTED_MEDIA_TYPE->value);
        $this->assertSame(416, Codes::CLIENT_RANGE_NOT_SATISFIABLE->value);
        $this->assertSame(417, Codes::CLIENT_EXPECTATION_FAILED->value);
        $this->assertSame(418, Codes::CLIENT_IM_A_TEAPOT->value);
        $this->assertSame(421, Codes::CLIENT_MISDIRECTED_REQUEST->value);
        $this->assertSame(422, Codes::CLIENT_UNPROCESSABLE_ENTITY->value);
        $this->assertSame(423, Codes::CLIENT_LOCKED->value);
        $this->assertSame(424, Codes::CLIENT_FAILED_DEPENDENCY->value);
        $this->assertSame(425, Codes::CLIENT_TOO_EARLY->value);
        $this->assertSame(426, Codes::CLIENT_UPGRADE_REQUIRED->value);
        $this->assertSame(428, Codes::CLIENT_PRECONDITION_REQUIRED->value);
        $this->assertSame(429, Codes::CLIENT_TOO_MANY_REQUESTS->value);
        $this->assertSame(431, Codes::CLIENT_REQUEST_HEADER_FIELDS_TOO_LARGE->value);
        $this->assertSame(451, Codes::CLIENT_UNAVAILABLE_FOR_LEGAL_REASONS->value);
    }

    public function testCasesServer(): void
    {
        $this->assertSame(500, Codes::SERVER_INTERNAL_ERROR->value);
        $this->assertSame(501, Codes::SERVER_NOT_IMPLEMENTED->value);
        $this->assertSame(502, Codes::SERVER_BAD_GATEWAY->value);
        $this->assertSame(503, Codes::SERVER_SERVICE_UNAVAILABLE->value);
        $this->assertSame(504, Codes::SERVER_GATEWAY_TIMEOUT->value);
        $this->assertSame(505, Codes::SERVER_VERSION_NOT_SUPPORTED->value);
        $this->assertSame(506, Codes::SERVER_VARIANT_ALSO_NEGOTIATES->value);
        $this->assertSame(507, Codes::SERVER_INSUFFICIENT_STORAGE->value);
        $this->assertSame(508, Codes::SERVER_LOOP_DETECTED->value);
        $this->assertSame(510, Codes::SERVER_NOT_EXTENDED->value);
        $this->assertSame(511, Codes::SERVER_NETWORK_AUTHENTICATION_REQUIRED->value);
    }
}
