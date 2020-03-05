<?php


namespace App\Service\User;


use App\Data\User\UserData;

class UserDealDataProcess
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
        return  (new UserData())->getUserDataDetail($iUserId);
    }
}
