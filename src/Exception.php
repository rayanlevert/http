<?php

namespace RayanLevert\Http;

/**
 * Exceptions from/by an HTTP resource can be used to inform the HTTP code (from RayanLevert\Http\Codes)
 */
class Exception extends \Exception
{
    /**
     * Initializes the exception
     *
     * @param string $message Message
     * @param Codes $httpCode HTTP Code used as the exception code
     */
    public function __construct(string $message, protected readonly Codes $httpCode)
    {
        parent::__construct($message, $httpCode->value);
    }

    /**
     * Returns RayanLevert\Http\Codes instance thrown by the exception
     */
    public function getHttpCode(): Codes
    {
        return $this->httpCode;
    }
}
