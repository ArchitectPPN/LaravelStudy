<?php


namespace App\Service\User;
use App\lib\Traits\SingletonTrait;

class UserService
{
    use SingletonTrait;
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

    /**
     * 更新用户数据
     *
     * @param array $aUserInfo
     *
     * @return mixed
     * @throws \Exception
     */
    public function updateUserInfo(array $aUserInfo)
    {
        UserDealDataProcess::checkUserInfoExists($aUserInfo);

        return UserDealData::updateUserInfo($aUserInfo);
    }
}







