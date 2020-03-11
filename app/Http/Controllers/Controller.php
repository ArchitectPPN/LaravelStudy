<?php

namespace App\Http\Controllers;

use App\Helper\JsonReturn;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success(...$args)
    {
        return JsonReturn::success(...$args);
    }

    public function error(...$args)
    {
        return JsonReturn::error(...$args);
    }

    /**
     * 公用字段校验方法
     *
     * @param       $request
     * @param array $aCheckArr
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function checkFields($request, array $aCheckArr)
    {
        $aKeys = array_keys($aCheckArr);

        $input = $request->only($aKeys);

        $validate = Validator::make($input, $aCheckArr);

        if ($validate->fails()) {
            return $this->error($validate->errors());
        }

        return $input;
    }

}
