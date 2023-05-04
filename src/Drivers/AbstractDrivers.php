<?php

namespace Ay4t\CryptoAddressValidator\Drivers;

class AbstractDrivers
{
    /**
     * __construct
     */
    public function __construct()
    {
    }

    /**
     * validate
     *
     * @param  mixed $address
     * @return bool
     */
    public static function validate(string $address): bool
    {
        return true;
    }
}
