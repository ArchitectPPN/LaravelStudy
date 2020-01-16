<?php


namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Service\User\UserService;

class UserController extends Controller
{
    /**
     * 获取用户的信息
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 9:49 PM
     * Description :
     * @return array
     */
    public function getUSerDetail()
    {
        return UserService::getUSerDetail();
    }

}
