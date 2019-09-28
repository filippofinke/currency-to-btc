<?php
namespace CurrencyToBtc;

class CurrencyToBtc {

    public static function convert($currency, $value) {
        try {
            $response = file_get_contents("https://blockchain.info/tobtc?currency=".$currency."&value=".$value);
            return $response;
        } catch(Exception $e) {
            throw new Exception("Invalid currency: $currency");
        }
    }

}