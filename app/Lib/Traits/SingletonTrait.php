<?php


namespace App\Lib\Traits;


trait SingletonTrait
{
    /**
     * @var 实例
     */
    public static $obj;

    /**
     * 得到一个实例
     *
     * @param mixed ...$args
     *
     * @return static
     */
    public static function getInstance(...$args)
    {
        if(!isset(self::$obj)){
            self::$obj = new static(...$args);
        }

        return self::$obj;
    }

    /**
     * new 一个实例
     *
     * @param mixed ...$args
     *
     * @return static
     */
    public static function newInstance(...$args)
    {
        return new static(...$args);
    }

}
