<?php


namespace App\Service\DB;


class DbException
{
    /**
     * 检查是否存在
     *
     * @param string $sTableName
     *
     * @throws DbExceptionDefined
     */
    public static function checkTableNameExist(string $sTableName)
    {
        if(empty($sTableName)){
            throw new DbExceptionDefined(DbExceptionDefined::EMPTY_TABLE_NAME);
        }
    }
}
