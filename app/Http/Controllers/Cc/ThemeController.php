<?php

namespace App\Http\Controllers\Cc;

use Encore\Admin\Widgets\Box;
use App\Models\Cc\Activity;
use App\Models\Cc\Theme;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Widgets\InfoBox;


class ThemeController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
  
     public function index($id)
    {
        $activities = Activity::with(['Theme'=>function($query){
            $query->select('id','title');
        }])->where('cc_theme_id',$id)
            ->get();
        return view('cc/theme',compact('activities'));
    }
    public function themes()
    {
        $theme = Theme::all();
        return view('cc/themes',compact('theme'));
    }
}