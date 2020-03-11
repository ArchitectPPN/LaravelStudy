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

    /**
     * 数据检验
     *
     * @param array $aUserInfo
     *
     * @throws \Exception
     */
    public static function checkUserInfoExists(array $aUserInfo)
    {
        if(isset($aUserInfo['sPhone'])){
           $aUserInfo = UserData::getInstance()->getUserDataByPhone($aUserInfo['sPhone']);
           if(!empty($aUserInfo)){
                UserException::checkPhoneExists();
           }
        }

        if(isset($aUserInfo['sUserName'])){
            $aUserInfo = UserData::getInstance()->getUserDataByPhone($aUserInfo['sUserName']);
            if(!empty($aUserInfo)){
                UserException::checkUserNameExists();
            }
        }
    }

    /**
     * 更新用户数据
     *
     * @param array $aUserInfo
     *
     * @return mixed
     */
    public static function updateUserDetail(array $aUserInfo)
    {
        return UserData::getInstance()->updateUserInfoByUserID($aUserInfo['iUserId'], $aUserInfo);
    }
}
