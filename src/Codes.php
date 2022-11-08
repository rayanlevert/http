<?php

namespace DisDev\Http;

/**
 * Définie les codes HTTP les plus courants via une énumeration
 *
 * @see https://github.com/php-fig/http-message-util
 */
enum Codes: int
{
    // Successful 2xx
    case SUCCESS_OK                            = 200;
    case SUCCESS_CREATED                       = 201;
    case SUCCESS_ACCEPTED                      = 202;
    case SUCCESS_NON_AUTHORITATIVE_INFORMATION = 203;
    case SUCCESS_NO_CONTENT                    = 204;
    case SUCCESS_RESET_CONTENT                 = 205;
    case SUCCESS_PARTIAL_CONTENT               = 206;
    case SUCCESS_MULTI_STATUS                  = 207;
    case SUCCESS_ALREADY_REPORTED              = 208;
    case SUCCESS_IM_USED                       = 226;

    // Redirection 3xx
    case REDIRECTION_MULTIPLE_CHOICES   = 300;
    case REDIRECTION_MOVED_PERMANENTLY  = 301;
    case REDIRECTION_FOUND              = 302;
    case REDIRECTION_SEE_OTHER          = 303;
    case REDIRECTION_NOT_MODIFIED       = 304;
    case REDIRECTION_USE_PROXY          = 305;
    case REDIRECTION_RESERVED           = 306;
    case REDIRECTION_TEMPORARY_REDIRECT = 307;
    case REDIRECTION_PERMANENT_REDIRECT = 308;

    // Client error 4xx
    case CLIENT_BAD_REQUEST                     = 400;
    case CLIENT_UNAUTHORIZED                    = 401;
    case CLIENT_PAYMENT_REQUIRED                = 402;
    case CLIENT_FORBIDDEN                       = 403;
    case CLIENT_NOT_FOUND                       = 404;
    case CLIENT_METHOD_NOT_ALLOWED              = 405;
    case CLIENT_NOT_ACCEPTABLE                  = 406;
    case CLIENT_PROXY_AUTHENTICATION_REQUIRED   = 407;
    case CLIENT_REQUEST_TIMEOUT                 = 408;
    case CLIENT_CONFLICT                        = 409;
    case CLIENT_GONE                            = 410;
    case CLIENT_LENGTH_REQUIRED                 = 411;
    case CLIENT_PRECONDITION_FAILED             = 412;
    case CLIENT_PAYLOAD_TOO_LARGE               = 413;
    case CLIENT_URI_TOO_LONG                    = 414;
    case CLIENT_UNSUPPORTED_MEDIA_TYPE          = 415;
    case CLIENT_RANGE_NOT_SATISFIABLE           = 416;
    case CLIENT_EXPECTATION_FAILED              = 417;
    case CLIENT_IM_A_TEAPOT                     = 418;
    case CLIENT_MISDIRECTED_REQUEST             = 421;
    case CLIENT_UNPROCESSABLE_ENTITY            = 422;
    case CLIENT_LOCKED                          = 423;
    case CLIENT_FAILED_DEPENDENCY               = 424;
    case CLIENT_TOO_EARLY                       = 425;
    case CLIENT_UPGRADE_REQUIRED                = 426;
    case CLIENT_PRECONDITION_REQUIRED           = 428;
    case CLIENT_TOO_MANY_REQUESTS               = 429;
    case CLIENT_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case CLIENT_UNAVAILABLE_FOR_LEGAL_REASONS   = 451;

    // Server error 5xx
    case SERVER_INTERNAL_ERROR                  = 500;
    case SERVER_NOT_IMPLEMENTED                 = 501;
    case SERVER_BAD_GATEWAY                     = 502;
    case SERVER_SERVICE_UNAVAILABLE             = 503;
    case SERVER_GATEWAY_TIMEOUT                 = 504;
    case SERVER_VERSION_NOT_SUPPORTED           = 505;
    case SERVER_VARIANT_ALSO_NEGOTIATES         = 506;
    case SERVER_INSUFFICIENT_STORAGE            = 507;
    case SERVER_LOOP_DETECTED                   = 508;
    case SERVER_NOT_EXTENDED                    = 510;
    case SERVER_NETWORK_AUTHENTICATION_REQUIRED = 511;
}
