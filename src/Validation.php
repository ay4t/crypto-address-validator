<?php

namespace Ay4t\CryptoAddressValidator;

/**
 * Class Validation
 * @package Ay4t\CryptoAddressValidator
 * @since 1.0.0
 * @version 1.0.0
 * 
 * This class is used to validate the crypto address
 * support multiple crypto address like BTC, ETH, LTC, and other crypto address
 * 
 * example use sould be like this:
 * Validation::make('bitcoin')->validate('1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa');
 * return true or false
 */
class Validation
{
    /**
    * __construct
    */
    public function __construct()
    {
    }

    // public static make
    public static function make(string $crypto)
    {
        $class = 'Ay4t\CryptoAddressValidator\Drivers\\' . ucfirst($crypto);
        return new $class;
    }
}
