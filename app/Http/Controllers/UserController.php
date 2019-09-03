<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function add()
    {
        $data = [
          'u_name'=>'capacity',
          'u_email'=>'capacity@qq.com'
        ];
        $res = UserModel::insert($data);
        if($res){
            echo '111';
        }else{
            echo '222';
        }
    }

    public function conRedis()
    {
        //$key = '1812a_123';
        $key = '1812a_123';
        $value = '456';
        Redis::set($key,$value);
        //取
        $a = Redis::get($key);
        print_r($a);
    }
}
