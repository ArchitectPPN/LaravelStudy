<?php


namespace App\Service\DB;


class DbServiceDealService
{
    /**
     *
     *
     * @param array $aCallFunc
     * @param array $aCallArgs
     */
    public static function checkDb(array $aCallFunc, array $aCallArgs)
    {
        foreach ($aCallFunc as $index => $item){
            DbException::$item($aCallArgs[$item]);
        }
    }
}
