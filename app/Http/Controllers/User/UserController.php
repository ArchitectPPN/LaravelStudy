<?php


namespace App\Http\Controllers\User;


use App\Data\Data;
use App\Http\Controllers\Controller;
use App\Service\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * 获取用户的信息
     *
     * Auth        : NiuJunQing
     * Create      : 1/16/2020 9:49 PM
     * Description :
     *
     * @param Request $request
     *
     * @return array
     */
    public function getUSerDetail(Request $request)
    {
        $input = $request->only(['iUserId']);

        $validator = Validator::make($input, [
            'iUserId' => 'required|integer|min:1'
        ]);

        if($validator->fails()){
            return $this->error($validator->errors());
        }

        $aUserData = UserService::getUSerDetail($input['iUserId']);

        return $this->success($aUserData);
    }

    public function getTableName()
    {
        $aEventInfo = (new Data())->getFirstOne([['iEventId', '=', 87]]);

        return $this->success($aEventInfo);
    }

}
