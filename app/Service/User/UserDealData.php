<?php


namespace App\Service\User;


class UserDealData
{
    /**
     * 得到用戶的詳細數據
     *
     * @param int $iUserId
     *
     * @return string
     */
    public static function getUserDetail(int $iUserId)
    {
        return UserDealDataProcess::getUserDetail($iUserId);
    }
}
