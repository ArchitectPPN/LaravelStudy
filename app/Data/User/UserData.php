<?php


namespace App\Data\User;


use App\Data\Data;
use App\Lib\Traits\SingletonTrait;

class UserData extends Data
{
    use SingletonTrait;

    const TABLE = 'db_user.tb_user';
    protected $dbTable = self::TABLE;

    /**
     * 根据用户id获取用户详情
     *
     * @param int $iUserId
     *
     * @return string
     */
    public function getUserDataDetail(int $iUserId)
    {
        return $this->getFirstOne([['iUserId', '=', $iUserId]]);
    }

    /**
     * 根据用户id查找用户数据
     *
     * @param int $iUserId
     *
     * @return string
     */
    public function getUserDataByUserId(int $iUserId)
    {
        return $this->getFirstOne([['iUserId', '=', $iUserId]]);
    }

    /**
     * 根据用户手机号查看用户信息
     *
     * @param string $sPhone
     *
     * @return string
     */
    public function getUserDataByPhone(string $sPhone)
    {
        return $this->getFirstOne([['sPhone', '=', $sPhone]]);
    }

    /**
     * @param int   $iUserID
     * @param array $aUserInfo
     *
     * @return mixed
     */
    public function updateUserInfoByUserID(int $iUserID, array $aUserInfo)
    {
        return $this->conditionUpdate([['iUserId', '=', $iUserID]], $aUserInfo);
    }
}
