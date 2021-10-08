<?php
namespace Iteearmah\IsEven;

class IsEven {

    public static function check($value): bool
    {
        return $value % 2 === 0;
    }
}