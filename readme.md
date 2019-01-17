# Guide

run the following command in your terminal:

```bash

  composer install

```

then put your stripe api key inside app/controllers/ChargeController's line 29.

```php

  Stripe::setApiKey("your_stripe_api_key");

```

after that go to config/db.php and put your db name.

```php

  define('DB_NAME', 'your_db_name');

```

## Author

Mohammad mohiuddin akib
