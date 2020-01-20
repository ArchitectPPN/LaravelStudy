<?php


namespace App\Service\User;


class UserExceptionDealService
{
    /**
     * Exception统一调度中心
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 10:10 PM
     * Description :
     * @param string $sClassName
     * @param array $aCallFunc
     */
    public static function checkUser(string $sClassName , array $aCallFunc = [])
    {
        foreach ($aCallFunc as $index => $value){
            $value = 'check' . $value;
            $sClassName::$value();
        }
    }
}
