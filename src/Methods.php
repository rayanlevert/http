<?php

namespace DisDev\Http;

/**
 * Définie les méthodes HTTP via une énumeration
 *
 * @see https://github.com/php-fig/http-message-util
 */
enum Methods: string
{
    case HEAD    = 'HEAD';
    case GET     = 'GET';
    case POST    = 'POST';
    case PUT     = 'PUT';
    case PATCH   = 'PATCH';
    case DELETE  = 'DELETE';
    case PURGE   = 'PURGE';
    case OPTIONS = 'OPTIONS';
    case TRACE   = 'TRACE';
    case CONNECT = 'CONNECT';
}
