<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\OpenTokenController;
use App\Models\User;
use App\Wechat\JSSDK;
use App\Wechat\WechatManager;
use App\Models\Post;

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
Route::get('/details', 'Api\UserController@details');

Route::get('gettoken', function (Request $request) {
    //传入用户登录code信息 根据传入用户code 到https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code='+ code +'&grant_type=authorization_code',换取openid
    //openid保证数据库的唯一性 要在用户表加入openid字段
    //判断opndid是否存在 如果存在则认为用户授权登录，openid不存在则做入库处理 要打通其他平台注册用户和微信注册用为同一用户
    //每次登录都需要走这个流程 获取微信用户信息--》》laravel api 获取openid--》是否注册--》》【注册 入库openid】--》》存在openid  --》》根据openid 拉去token
    //建立token
    if (empty($request->input('code'))) {
        return response()->json([
            'status' => 1,
            'message' => 'invalid code'
        ]);
    }
    $code = $request->input('code');

    $wechatManager = new WechatManager();
    try {
        $appid = env('WX_APP_ID');
        $secret = env('WX_APP_SECRET');
//第一步:取得openid
        //$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
        $oauth2Url = "https://api.weixin.qq.com/sns/jscode2session?appid=$appid&secret=$secret&js_code=$code&grant_type=authorization_code";
        $oauth2 = $wechatManager->getJson($oauth2Url);
        //log::critical("ouath2".$oauth2);
//第二步:根据全局access_token和openid查询用户信息
//        $access_token = $oauth2["access_token"];
        $openid = $oauth2['openid'];
//        getjson output{"session_key":"UckUsDxuNRtGeYdk9krBrg==","openid":"od7wm0TQInEbkRjF1qOqLs29HbNg"}
        log::info("openid".$openid);
//        $get_user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
//        $userinfo = $wechatManager->getJson($get_user_info_url);
//        //log::critical("uinfo".$userinfo);
//        $nickname = $userinfo["nickname"];
//        $unionid = $userinfo["openid"];
//        $openid = $userinfo["openid"];
//        log::info("$nickname".$nickname);
    }catch (\Exception $e) {
        Log::error('get user exception::' . $e);
        Log::info('get user exception::end');
    }
/*
    if (!empty($request->input('code')))
        $code = $request->input('code');
    else
        $code = "";
//        if ($code == "") {
//            return redirect("/")->with('info', $message);
//        }
    $wechatManager = new WechatManager();
    try {
        $appid = env('WX_APP_ID');
        $secret = env('WX_APP_SECRET');
//第一步:取得openid
        $oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
        $oauth2 = $wechatManager->getJson($oauth2Url);
        //log::critical("ouath2".$oauth2);
//第二步:根据全局access_token和openid查询用户信息
        $access_token = $oauth2["access_token"];
        $openid = $oauth2['openid'];
        $get_user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
        $userinfo = $wechatManager->getJson($get_user_info_url);
        //log::critical("uinfo".$userinfo);
        $nickname = $userinfo["nickname"];
        $unionid = $userinfo["openid"];
        $openid = $userinfo["openid"];
//            $user = User::where('wx_unionid', $unionid)->first();
        $user = User::where('wx_openid', $openid)->first();
        $newUser = false;
        $userhelper = app()->make(UserHelper::class);
        if ($user === null) {
            Log::info('create new user id.');
            $user = new User();
            $request->session()->flush();
            $request->session()->put('profile_completed_trigger', 'init');
            $user->password = \Hash::make('the-password-of-choice');
            $user->email = $unionid . '@fakeemail.com';
            $user->refer_code = $userhelper->generate_refer_code();
            $newUser = true;
        }
        $user->nickname = $nickname;
        $user->wx_openid = $openid;
        $user->wx_headimgurl = $userinfo["headimgurl"];
        $user->wx_country = $userinfo["country"];
        $user->wx_province = $userinfo["province"];
        $user->wx_city = $userinfo["city"];
        $user->wx_sex = $userinfo["sex"];
        Log::info('new user. sub');
        $wxmphelper = app()->make(WxmpHelper::class);


//        if(array_key_exists('test', $_GET)){


//            if (array_key_exists('subscribe', $userinfo)) {
//                try {
//                    Log::info('new user. sub'.$userinfo["subscribe"]);
//
//                    $user->wx_subscribe = $userinfo["subscribe"];
//                } catch (\Exception $e) {
//
//                }
//            }
        $user->save();

        $token = $wxmphelper->GetAccessToken();
        $info = $wxmphelper->GetUserInfo($user->wx_openid, $token);
        if (array_key_exists('subscribe', $info)) {
            $userhelper->update_subscribe_status($user->wx_openid, $info["subscribe"]);
        } else {
            echo 'can not get the field: subscribe';
        }

        $ori = $request->session()->get('ori', '/');

        if ($newUser) {
            $request->session()->put('newuser', 'new');
            $message = self::insert_refer_record($request, $user, $ref);
            if ($user->wx_subscribe !== 1) {
                $ori = '/subscribe_wxmp';
            }
            Log::info('new user.' . $ori);
        }
        $request->session()->put('nickname', $nickname);
        Log::info('set user id.' . $user->id);
        $request->session()->put('uid', $user->id);

    } catch (\Exception $e) {
        Log::error('get user exception::' . $e);
        $request->session()->put('nickname', 'wx error');
        $request->session()->put('uid', 'wx error');
        Log::info('get user exception::end');
    }
    if (strpos($ori, 'redeem_refer') !== false) {
        if ($user->wx_subscribe !== 1) {
            $ori = '/subscribe_wxmp';
        }
        Log::info('reset');
    }
    */

    $user = User::find(3);
    $openid = 94589;
    $token = $user->createToken($user['name'])->accessToken;
    $openC = new OpenTokenController();
    $openC->index($token, $openid);
    /****
     *获取token 返回
     *把token值入庫保存，加入當前時間+second 作爲token有效時間
     * 这个地方要修改处理返回token 和openid
     */
    return response()->json([
        'token' => $token,
        'openid' => $openid,
        'message'=>'',
        'status' => 0
    ]);
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
    } else {
        //返回代码错误的时候表示超时需要重新登录重新獲取token
        return response()->json(['status' => 401, 'msg' => 'time out']);
    }

});

Route::get('parameters', function (Request $request) {
    return $request->all();
});
Route::get('post/{id}', function (Request $request,$id) {
   $post = Post::find($id);
   return $post;
});

