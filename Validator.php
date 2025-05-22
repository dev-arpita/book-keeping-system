<?php
class Validator {
    public function string($value, $min = 1, $max= INF){
        return strlen(trim($value > $min && $value < $max));
    }
}