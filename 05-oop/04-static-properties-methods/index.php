<?php

class MathUtils {
    public static $pi = 3.14;

    public static function square($number) {
        return $number * $number;
    }
}

echo MathUtils::$pi . '<br/>';

echo MathUtils::square(5) . '<br/>';