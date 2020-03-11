<?php


namespace App\Http\Controllers\API\User;


use App\Data\Data;
use App\Http\Controllers\Controller;
use App\Service\User\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * 获取用户的信息
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getUserDetail(Request $request)
    {
        $input = $this->checkFields($request, ['iUserId' => 'required|integer|min:1']);

        if(is_array($input)){
            $aUserData = UserService::getUSerDetail($input['iUserId']);

            return $this->success($aUserData);
        }

        return $input;
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function getTableName()
    {
        $aEventInfo = (new Data())->getFirstOne([['iEventId', '=', 87]]);

        return $this->success($aEventInfo);
    }

    /**
     * 更新用户数据
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function updateUserInfo(Request $request)
    {
        $input = $this->checkFields($request, [
            'iUserId'   => 'required|integer|min:1',
            'sUserName' => 'string|max:20',
            'sPhone'    => 'string|max:11|min:11'
        ]);

        if(is_array($input)){
            return $this->success(UserService::getInstance()->updateUserInfo($input));
        }

        return $input;
    }
}
