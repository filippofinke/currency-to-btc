<?php
use CurrencyToBtc\CurrencyToBtc as CurrencyToBtc;
require __DIR__ . '/vendor/autoload.php';

echo CurrencyToBtc::convert('CHF', 100);