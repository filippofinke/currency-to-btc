# currency-to-btc
---

A simple wrapper for the blockchain API currency exchange rate.

### Install:
> composer require filippofinke/currency-to-btc

### Usage:
```php
<?php
use CurrencyToBtc\CurrencyToBtc as CurrencyToBtc;
require __DIR__ . '/vendor/autoload.php';

echo CurrencyToBtc::convert('CHF', 100);
// Example result: 0.01243236
```
