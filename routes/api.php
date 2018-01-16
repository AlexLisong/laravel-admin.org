<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\OpenTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
 * 方法一 获取openid
 *
 *
 *
 */
Route::get('/details','Api\UserController@details');

Route::get('gettoken', function (Request $request) {
    //传入用户登录code信息 根据传入用户code 到https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code='+ code +'&grant_type=authorization_code',换取openid
    //openid保证数据库的唯一性 要在用户表加入openid字段
    //判断opndid是否存在 如果存在则认为用户授权登录，openid不存在则做入库处理 要打通其他平台注册用户和微信注册用为同一用户
    //每次登录都需要走这个流程 获取微信用户信息--》》laravel api 获取openid--》是否注册--》》【注册 入库openid】--》》存在openid  --》》根据openid 拉去token
    //建立token
    $user = App\User::find(1);
    $openid = 94589;
    $token = $user->createToken($user['name'])->accessToken;
    $openC = new OpenTokenController();
    $openC->index($token, $openid);
    /****
     *获取token 返回
     *把token值入庫保存，加入當前時間+second 作爲token有效時間
     * 这个地方要修改处理返回token 和openid
     */

    return $token;
});
Route::get('fordata', function (Request $request) {
    $openC = new OpenTokenController();
    /*
     * 修改verfytime方法 出入参数 openid ，token
     *
     */
    $verifyflay = $openC->verfiytime();
    if ($verifyflay) {
        //访问需要访问的控制器 返回需要得数据
    }else{
        //返回代码错误的时候表示超时需要重新登录重新獲取token
        return response()->json(['status'=>401,'msg'=>'time out']);
    }

});

Route::get('parameters', function (Request $request) {
    return $request->all();
});