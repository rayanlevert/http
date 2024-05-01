## Simple functionalites handling HTTP (codes and methods) via PHP enumerations (from 8.1)

> Refer to php-fig https://github.com/php-fig/http-message-util

### RayanLevert\Http\Codes

PHP enumeration with HTTP codes [RayanLevert\Http\Codes](src/Codes.php)

### DisDev\Http\Methods

PHP enumeration with HTTP methods

```php
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

\RayanLevert\Http\Methods::HEAD // 'HEAD'
```

### RayanLevert\Http\Exception

PHP exception initialized with an HTTP code with `RayanLevert\Http\Codes`

```php
// HTTP 401 error
$oException = new \DisDev\Http\Exception('Unauthorized', \RayanLevert\Http\Codes::CLIENT_UNAUTHORIZED)
```