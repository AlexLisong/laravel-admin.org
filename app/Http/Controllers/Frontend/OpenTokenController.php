<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/16
 * Time: 11:41
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\OpenToken;
use Illuminate\Support\Facades\DB;

class OpenTokenController extends Controller
{
    public function index($token,$openid)
    {
        $openModel=new OpenToken();
        $openModel->openid=$openid;
        $openModel->token=$token;
        $openModel->invalidtime=time()+3600;//限時一小時
        $openModel->save();

    }
    public function verfiytime(){
        //传递lopenid 和token过来验证时间
        //正式使用需要传递数据

        $token='eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjcxZTRjZGRjMWYyMjA5OThmMGQ5YTc0ZmQ1MzA5YmQ2NTVhYWQ4NGUxNDdmNmNlODg1N2U3NmRhMjUwMjJjZTJmYTdlODExZjUwNTgyYzc1In0.eyJhdWQiOiIxIiwianRpIjoiNzFlNGNkZGM';
        $openid=94589;
        //删除失效token记录
        OpenToken::where('invalidtime','<',time())->deleted();
        $ss=OpenToken::where('invalidtime','>',time())->where('token',$token)->where('openid',$openid)->get();
        if(empty($ss)){
            return false;
        }else{
           return true;
        }
    }
    public  function  test($data){

            return ['code'=>200,'msg'=>'hello,world'];
    }
}