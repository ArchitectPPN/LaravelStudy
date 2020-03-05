<?php


namespace App\Service\User;


class UserService
{
    /**
     * 得到用户的详情
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 10:16 PM
     * Description :
     *
     * @param int $iUserId
     *
     * @return string
     */
    public static function getUSerDetail(int $iUserId)
    {
//        $aCallFunc = [
//            'UserNameStringLength' ,
//        ];
//
//        // 检验
//        UserExceptionDealService::checkUser(UserException::class , $aCallFunc);

        // 数据处理
        $aUserData = UserDealData::getUserDetail($iUserId);

        // 返回数据
        return $aUserData;
    }
}







