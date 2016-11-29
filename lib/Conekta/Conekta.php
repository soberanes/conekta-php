<?php

namespace Conekta;

abstract class Conekta
{
    public static $apiKey;
    public static $apiBase = 'http://localhost:60196';
    public static $apiVersion = '1.0.0';
    public static $locale = 'es';
    const VERSION = '3.0.1';
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
    public static function setApiVersion($version)
    {
        self::$apiVersion = $version;
    }
    public static function setLocale($locale)
    {
        self::$locale = $locale;
    }
}
