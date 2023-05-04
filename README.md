# crypto-address-validator
PHP Library for multiple crypto address validator

# requirement
- php extention: php-bcmath

# installation
```
composer config repositories.CryptoAddressValidator vcs git@github.com:ay4t/crypto-address-validator.git
composer require ay4t/crypto-address-validator:dev-master
```

# example usage
```
require_once 'vendor/autoload.php';

use Ay4t\CryptoAddressValidator\Validation;

$validation = Validation::make('bitcoin')->validate('1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa');
var_dump($validation);
```