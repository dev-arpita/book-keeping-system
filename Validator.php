<?php
class Validator {
    public static function string($value, $min = 1, $max= INF){
        return strlen(trim($value > $min && $value < $max));
    }
}