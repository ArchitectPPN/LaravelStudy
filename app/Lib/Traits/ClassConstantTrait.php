<?php


namespace App\Lib\Traits;


trait ClassConstantTrait
{
    private static function getClassConstants()
    {
        $reflect = new \ReflectionClass(__CLASS__);
        return $reflect->getConstants();
    }
}
