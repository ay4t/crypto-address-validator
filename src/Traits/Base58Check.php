<?php

namespace Ay4t\CryptoAddressValidator\Traits;

trait Base58Check
{
    /**
     * base58checkDecode
     *
     * @param  string $address
     * @return mixed
     */
    public static function base58checkDecode(string $address)
    {
        $hex = '';
        $address = preg_replace('/[^1-9A-HJ-NP-Za-km-z]/', '', $address);

        // Konversi alamat menjadi bilangan heksadesimal
        for ($i = 0; $i < strlen($address); $i++) {
            $base58 = strpos('123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz', $address[$i]);
            $hex = bcmul($hex, '58', 0);
            $hex = bcadd($hex, $base58, 0);
        }

        // Konversi bilangan heksadesimal menjadi data biner
        $hex = ltrim($hex, '0');
        if (strlen($hex) % 2 != 0) {
            $hex = '0' . $hex;
        }

        $bin = hex2bin($hex);

        // Tambahkan prefix 0 jika perlu
        $prefix = str_repeat("\x00", strlen($address) - strlen(ltrim($address, '1')));
        $bin = $prefix . $bin;

        return $bin;
    }
}
