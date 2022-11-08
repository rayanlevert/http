<?php

namespace DisDev\Http;

/**
 * Exceptions qui relèvent d'un code HTTP en particulier (via l'enum DisDev\Http\Codes)
 */
class Exception extends \Exception
{
    /**
     * Initialise l'exception
     *
     * @param string $message Message de l'exception
     * @param \DisDev\Http\Codes $oHttpCode Code HTTP qui est relevé de l'exception
     */
    public function __construct(string $message, protected readonly Codes $oHttpCode)
    {
        parent::__construct($message, $oHttpCode->value);
    }

    /**
     * Retourne l'instance DisDev\Http\Codes levée par l'exception
     */
    public function getHttpCode(): Codes
    {
        return $this->oHttpCode;
    }
}
