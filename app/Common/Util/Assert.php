<?php

namespace App\Common\Util;

/**
* Assert
*/
class Assert
{
    public static function notNull($arg, $argName) {
        if ($arg == null) {
            throw new \InvalidArgumentException($argName . " should not be null");
        }
    }

    public static function isString($arg, $argName) {
        if (!is_string($arg)) {
            throw new \InvalidArgumentException($argName . " should be a string");
        }
    }

    public static function isInt($arg, $argName) {
        if (!is_int($arg)) {
            throw new \InvalidArgumentException($argName . " should be an integer");
        }
    }

    public static function isArray($arg, $argName) {
        if (!is_array($arg)) {
            throw new \InvalidArgumentException($argName . " should be an array");
        }
    }

    public static function isArrayAndNotEmpty($arg, $argName) {
        if (!is_array($arg) || empty($arg)) {
            throw new \InvalidArgumentException($argName . " is not an array or is empty");
        }
    }
}