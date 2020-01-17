<?php


namespace App\Helper;


class JsonReturn
{

    /**
     * @param mixed ...$args
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function success(...$args)
    {
        return self::com(200, 'success', $args);
    }

    /**
     * @param mixed ...$args
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function error(...$args)
    {
        return self::com(500, 'error', $args);
    }

    /**
     * @param       $code
     * @param       $msg
     * @param array $args
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function com($code, $msg, array $args)
    {
        return self::json($code, $msg, $args[1]);
    }

    /**
     *
     * @param $code
     * @param $msg
     * @param $data
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public static function json($code, $msg, $data)
    {
        $ret = [
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ];

        return Response(json_encode($ret, JSON_UNESCAPED_UNICODE | JSON_OBJECT_AS_ARRAY), 200, [
            'Content-Type' => 'application/json; charset=utf-8',
            'P3P'          => 'CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"'
        ]);

    }

}
