<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once '../vendor/autoload.php';

use Ay4t\CryptoAddressValidator\Validation;

$address    = '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa';
// if isset $_GET['address'] then use $_GET['address']
if (isset($_GET['address'])) {
    $address = $_GET['address'];
}

// $validation = Validation::make('bitcoin')->validate('bc1q5rhh8nstsvtr6l2sn5w7p7mu26laxufv39z0sn');
// $validation = Validation::make('bitcoin')->validate('1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa');

$validation = Validation::make('bitcoin')->validate($address);
var_dump($validation);