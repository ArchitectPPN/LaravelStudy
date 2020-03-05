<?php


namespace App\Data\User;


use App\Data\Data;

class UserData extends Data
{
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
}
