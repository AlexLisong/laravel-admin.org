<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ChinaArea;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $signPackage = self::get_sign_package();
//        $signPackage = '';
        $path = '1/0.gif';
        $name = "";
        $link = 'http://avantcoding.com/';
        if (!empty($request->input('hero'))) {
            $path = '1/' . $request->input('hero') . '.gif';
            $name = ucfirst($request->input('hero'));
            $link = 'http://avantcoding.com/?hero='.$request->input('hero');
        }
        $title = '硅谷侠 '. $name .' 的作品';

//        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
//            echo '<script type="text/javascript"> document.title = "'.$title.'"; </script>';
//        }
        $description = "最新作品";
        $imgUrl = "http://avantcoding.com/img/1.jpg";
        //return view('frontend.index', ['path' => $path, 'signPackage' => $signPackage]);
        return view('frontend.index', ['name'=> $name,'path' => $path, 'signPackage' => $signPackage, 'title' => $title, 'description' => $description, 'imgUrl' => $imgUrl,'link'=>$link]);

    }
    
    public function cshome(Request $request)
    {
        return view('frontend.cshome');
    }
    public function sign_in(Request $request)
    {
        return view('frontend.sign_in');
    }
    public function sign_in_student(Request $request)
    {
        return view('frontend.sign_in_student');
    }
    public function sign_in_teacher(Request $request)
    {
        return view('frontend.sign_in_teacher');
    }
    public function lesson_list(Request $request)
    {
        return view('frontend.lesson_list');
    }
    public function upload_video(Request $request)
    {
        return view('frontend.upload_video');
    }
    public function materials(Request $request)
    {
        return view('frontend.materials');
    }
    public function scratch(Request $request)
    {
        return view('frontend.scratch-editor');
    }
    public function teacher_club_overview(Request $request)
    {
        return view('frontend.teacher_club_overview');
    }
    public function macros()
    {
        return view('frontend.macros');
    }
    public function city(Request $request)
    {
        $provinceId = $request->get('q');

        return ChinaArea::city()->where('parent_id', $provinceId)->get(['id', DB::raw('name as text')]);
    }
}
