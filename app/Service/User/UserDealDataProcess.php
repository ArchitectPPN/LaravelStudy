<?php


namespace App\Service\User;


use App\Data\User\UserData;

class UserDealDataProcess
{
    public static function getUserDetail()
    {
        return UserData::getUserDataDetail();
    }
}
