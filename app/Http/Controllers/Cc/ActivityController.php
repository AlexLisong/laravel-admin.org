<?php

namespace App\Http\Controllers\Cc;

use App\Models\Cc\Activitie;
use App\Models\Cc\Theme;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ActivitieController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
  
     public function index($id)
    {
       $activities = Activitie::with(['Theme'=>function($query){
            $query->select('id','title');
       }])->where('cc_theme_id',$id)
       ->get();
       return view('cc/activity',compact('activities'));
    }
}