# Simples fonctionnalités permettant de gérer la couche HTTP d'une application

> Se référer à php-fig pour l'implémentation https://github.com/php-fig/http-message-util

## DisDev\Http\Codes

Énumération PHP contenant tous les codes HTTP [DisDev\Http\Codes](src/Codes.php)

## DisDev\Http\Methods

Énumération PHP contenant tous les méthodes HTTP

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

\DisDev\Http\Methods::HEAD // 'HEAD'
```

## DisDev\Http\Exception

Exception PHP qui doit être initialisée avec un code HTTP via l'enumération `DisDev\Http\Codes`

```php
// Erreur HTTP 401
$oException = new \DisDev\Http\Exception('non autorisé', \DisDev\Http\Codes::CLIENT_UNAUTHORIZED)
```