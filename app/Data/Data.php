<?php


namespace App\Data;


use App\Service\DB\DbServiceDealService;
use Illuminate\Support\Facades\DB;

class Data
{
    protected $dbTable        = 'db_event.tb_event';
    protected $autoUpdateTime = '';

    /**
     * 获取一个指定数据库和表的连接 数据库 和 表名 用 . 分割
     *
     * @param string $sDbTable
     * @param string $sAlias
     *
     * @return string
     */
    protected function DB( string $sDbTable, string $sAlias = '' )
    {
        DbServiceDealService::checkDb([ 'checkTableNameExist' ], [ 'checkTableNameExist' => $sDbTable ]);

        $sDbName = checkStrExistInOther($sDbTable, '.');

        DbServiceDealService::checkDb([ 'checkTableNameExist' ], [ 'checkTableNameExist' => $sDbName ]);

        if (!empty($sAlias)) {
            $sDbTable = $sDbTable . " as {$sAlias} ";
        }

        return DB::table($sDbTable);
    }

    public function getTest( string $sTable, string $sAlias )
    {
        return $this->DB($sTable, $sAlias);
    }

    /**
     * @param array $aCondition
     * @param array $aOrder
     *
     * @return string
     */
    public function getFirstOne( array $aCondition, array $aOrder = [])
    {
        return $this->getWhere($aCondition)->first();
    }

    /**
     *
     * @param array $aConditions
     * @param array $aOrderBy
     *
     * @return string
     */
    protected function getWhere( array $aConditions, array $aOrderBy = [] )
    {
        $oQuery = $this->DB($this->dbTable);

        foreach ( $aConditions as $vo ) {
            switch ($vo[1]) {
                case 'or':
                    $oQuery = $oQuery->orWhere($vo[0], $vo[2]);
                    break;
                default:
                    $oQuery = $oQuery->where($vo[0], $vo[1], $vo[2]);
                    break;
            }
        }

        return $oQuery;
    }
}
